<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinasiWisata extends Model
{
    protected $guarded = [];

    public function getImage()
    {
        if ($this->gambar == null) {
            return asset("publikasi/no_image.jpg");
        }else {
            return url("destinasi-wisata/".$this->gambar);
        }
    }
}
