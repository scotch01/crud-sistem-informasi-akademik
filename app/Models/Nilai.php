<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilais';
    protected $fillable = [
        'nama_mhs',
        'nim_mhs',
        'nama_dosen',
        'matkul',
        'nilai',
    ];
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public function matkul(){
        return $this->belongsTo(Matkul::class);
    }
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
