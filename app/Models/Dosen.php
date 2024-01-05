<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'bidang',
    ];
    public function matkuls(){
        return $this->hasMany(Matkul::class);
    }
    public function nilais(){
        return $this->hasMany(Nilai::class);
    }
}
