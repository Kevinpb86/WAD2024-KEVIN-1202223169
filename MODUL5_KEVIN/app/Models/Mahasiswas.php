<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email',
        'jurusan',
        'dosen_id',
    ]; 

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'dosen_id');
    }

}
