<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $fillable = ['nama_dokumen','gambar','deskripsi','file'];
}
