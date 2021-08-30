<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul','slug','konten','gambar','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
