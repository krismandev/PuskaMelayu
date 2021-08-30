<?php
use App\Berita;
use App\DestinasiWisata;
use App\Galeri;
use App\Mitra;
use App\Dokumen;
use App\Koleksi;

function sumBerita()
{
    $sumBerita = Berita::count();
    return $sumBerita;
}

function sumGaleri()
{
    $sumGaleri = Galeri::count();
    return $sumGaleri;
}

function sumKoleksi()
{
    $sumKoleksi = Koleksi::count();
    return $sumKoleksi;
}

function sumDestinasiWisata()
{
    $sumDestinasiWisata = DestinasiWisata::count();
    return $sumDestinasiWisata;
}

function sumMitra()
{
    $sumMitra = Mitra::count();
    return $sumMitra;
}

function sumDokumen()
{
    $sumDokumen = Dokumen::count();
    return $sumDokumen;
}



