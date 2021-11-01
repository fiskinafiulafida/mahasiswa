<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Kelas extends Model
{
    use HasFactory;
    // untuk mendefinisikan bahwa model ini terkait dengan tabel kelas
    protected $table = 'kelas';

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }

}
