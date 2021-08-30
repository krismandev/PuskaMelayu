@extends('layouts.dashboard.master')
@section('title')
    Dashboard Puska Melayu
@endsection
@section('content')
<div class="row colorbox-group-widget">
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-primary">
                <div class="media-body">
                    <h3 class="info-count">{{sumBerita()}} <span class="pull-right"><i class="icon-book-open"></i></span></h3>
                    <p class="info-text font-12">Post</p>
                    <p class="info-ot font-15">Berita</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-success">
                <div class="media-body">
                    <h3 class="info-count">{{sumKoleksi()}} <span class="pull-right"><i class="fa fa-file-picture-o"></i></span></h3>
                    <p class="info-text font-12">Data</p>
                    <p class="info-ot font-15">Koleksi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-warning">
                <div class="media-body">
                    <h3 class="info-count">{{sumDestinasiWisata()}} <span class="pull-right"><i class="fa fa-file"></i></span></h3>
                    <p class="info-text font-12">Data</p>
                    <p class="info-ot font-15">Destinasi Wisata</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 info-color-box">
        <div class="white-box">
            <div class="media bg-danger">
                <div class="media-body">
                    <h3 class="info-count">{{sumMitra()}} <span class="pull-right"><i class="icon-globe"></i></span></h3>
                    <p class="info-text font-12">Mitra</p>
                    <p class="info-ot font-15">Mitra</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $(".btn").click(function (e) {
                for (let index = 0; index < 100; index++) {
                    $(".text").html("<h1>Hallo Dunia</h1>")

                }

            });
        });
    </script>
@endsection
