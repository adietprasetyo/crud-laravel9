@extends('layouts.master')
@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="/warga/create" class="btn btn-md btn-success mb-3">TAMBAH WARGA <i class="fa fa-plus"></i></a>
                        {{-- <a href="#" class="btn btn-md btn-success mb-3">TAMBAH WARGA</a> --}}
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nik</th>
                                    <th scope="col">No. KK</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($warga as $w)

                                @endforeach --}}
                                @forelse ($warga as $w)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $w->id }}</td>
                                        <td class="text-center">
                                            {{-- <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px"> --}}
                                            {{ $w->nama }}
                                        </td>
                                        <td>{{ $w->nik }}</td>
                                        <td>{{ $w->no_kk }}</td>
                                        <td>{{ $w->jenis_kelamin }}</td>
                                        <td class="review">
                                            {{-- <div class="content hideContent"> --}}
                                                {!! $w->alamat !!}
                                            {{-- </div>
                                            <div class="show-more">
                                                <a href="#">....</a>
                                            </div> --}}
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/warga/{{ $w->id }}" method="POST">
                                                <a href="/warga/{{ $w->id }}/edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" value="Delete"><i class="fa fa-trash"></i></button>
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
                        {{-- {{ $warga->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
