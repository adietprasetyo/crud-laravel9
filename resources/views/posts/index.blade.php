<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - adiet_narto</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <style>
        div.hideContent {
            overflow: hidden;
            line-height: 1em;
            height: 2em;
        }

        .showContent {
            line-height: 1em;
            height: auto;
        }
        .showContent{
            height: auto;
        }
        .show-more {
            padding: 10px 0;
            text-align: center;
        }
    </style> --}}
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td class="review">
                                            {{-- <div class="content hideContent"> --}}
                                                {!! $post->content !!}
                                            {{-- </div>
                                            <div class="show-more">
                                                <a href="#">....</a>
                                            </div> --}}
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

    {{-- <script>
        $(".show-more a").on("click", function() {
            var $this = $(this);
            var $content = $this.parent().prev("div.content");
            var linkText = $this.text().toUpperCase();

            if(linkText === "SHOW MORE"){
                linkText = "Show less";
                $content.switchClass("hideContent", "showContent", 100);
            } else {
                linkText = "Show more";
                $content.switchClass("showContent", "hideContent", 100);
            };

            $this.text(linkText);
        });
    </script> --}}

</body>
</html>
