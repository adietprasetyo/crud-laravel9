<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga'; //agar memproteksi utk terhindar penambhan imbuhan -s setelah tulisan warga, karena table bernama warga. Bukan wargas.

    //Dua mass assignment: $guarded dan $fillable
    protected $guarded = []; //kebalikan dari $fillable dimana attribut yang terdapat di dalam guarded tidak diizinkan untuk di lakukan mass assignment (dihalangi).
    //protected $fillable = ['nama', 'nik', 'no_kk', 'jenis_kelamin', 'alamat']; //agar memanipulasi data seperti create(), atau insert(), dengan perintah ini dapat memilih field mana saja yang akan kita manipulasi. Atau data mana saja yang boleh allow assignment (masuk/input) ke database.
}
