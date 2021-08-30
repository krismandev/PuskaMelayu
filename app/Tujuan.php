<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    protected $guarded = [];

    public function getImage()
    {
        if ($this->gambar == null) {
            return asset("images/logo_sdgs.png");
        }else {
            return url("images/".$this->gambar);
        }
    }
}
