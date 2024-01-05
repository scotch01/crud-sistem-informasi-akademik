<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'angkatan'
    ];
    public function nilais(){
        return $this->hasMany(Nilai::class);
    }
}
