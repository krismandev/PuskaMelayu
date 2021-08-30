<?php

use App\Banner;

$banners = Banner::orderBy('created_at','desc')->get();

?>

@extends('layouts.frontend.master')
@section('title')
    Pusat Kajian Melayu UIN Sultan Thaha Syaifuddin Jambi
@endsection
@section('content')
<style>
    .about-compnay{
        padding: 25px;
    }

    .tujuanimg{
        /* -webkit-transform: translate(-50% , -50%);
                transform: translate(-50% , -50%); */
        transition:all 0.5s ease-in-out;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.12);
    }

    .tujuanimg:hover{
        -webkit-transform:translate(-50% , -50%) scale3D(1.1,1.1,1);
          transform:translate(-50% , -50%) scale3D(1.1,1.1,1);
    }
</style>

{{-- <div class="about-compnay section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12"><img src="{{url('images/'.$tentang->gambar)}}" alt="" style="width: 550px; height: 550px;"></div>
            <div class="col-lg-6 col-12">
                <div class="text">
                    <div class="theme-title-one">
                        <h2>Apa itu SDGs?</h2>
                        <p>{!!Str::limit($tentang->tentang,500)!!}...</p> <a href="{{route('tentang')}}">Baca Selengkapnya</a>
                    </div> <!-- /.theme-title-one -->
                </div> <!-- /.text -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.about-compnay --> --}}

{{-- <div class="testimonial-section section-spacing">
    <div class="overlay">
        <div class="container">
            <div class="row">
                @if ($pilars->count() != null)
                @foreach ($pilars as $pilar)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-member">
                        <div class="image-box">
                            <a href="{{url('pilar/'.$pilar->file)}}">
                                <img src="{{url('pilar/'.$pilar->gambar)}}" alt="">
                            </a>
                        </div> <!-- /.image-box -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.testimonial-section --> --}}

<div class="our-blog latest-news section-spacing" style="margin-top: 20px;">
    <div class="container">
        <div class="theme-title-one">
            <h2>Berita Terbaru</h2>
            {{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers </p> --}}
        </div> <!-- /.theme-title-one -->
        @if($beritas->count() != null)
        <div class="wrapper">
            <div class="clearfix">
                <div class="latest-news-slider">
                    @foreach ($beritas as $berita)

                    <div class="item">
                        <div class="single-blog">
                            <div class="image-box">
                                <img src="{{url('images/'.$berita->gambar)}}" alt="" style="height: 278px; object-position: center; object-fit: cover;">
                                <div class="overlay"><a href="#" class="date">{{date('d M Y',strtotime($berita->created_at))}}</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="{{route('showBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">{!!Str::limit($berita->konten,150)!!}</a></h5>
                                <a href="{{route('showBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}" class="read-more">Baca selengkapnya...</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->
                    </div> <!-- /.col- -->
                    @endforeach
                </div> <!-- /.latest-news-slider -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
        @endif
    </div> <!-- /.container -->
</div> <!-- /.our-blog -->

<div class="core-values">
    <div class="container">
        <div class="theme-title-one">
            <h2>Koleksi</h2>
        </div> <!-- /.theme-title-one -->
        <div class="wrapper">
            <div class="core-value-slider">
                @if ($koleksis != null)

                @foreach ($koleksis as $koleksi)
                <div class="item">
                    <div class="single-value-block">
                        <div class="image-box">
                            <a href="{{$koleksi->getImage()}}">
                                <img src="{{$koleksi->getImage()}}" alt="" style="width: 370px; height: 255px; object-fit: cover; object-position: center;">
                            </a>
                            {{-- <div class="overlay"><a href="#" class="theme-button-one">READ MORE</a></div> --}}
                        </div> <!-- /.image-box -->
                        <div class="text">
                            <h5><a href="#">{{$koleksi->deskripsi}}</a></h5>
                            {{-- <p>The Love Boat soon will be making other run plore strange tools.</p> --}}
                        </div> <!-- /.text -->
                    </div> <!-- /.single-value-block -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.core-value-slider -->
        </div> <!-- /.wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.core-values -->

{{-- <div class="our-team section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Tim Kami</h2>
        </div>
        <div class="wrapper">
            <div class="row owl-one owl-theme">
                @if ($tims != null)
                @foreach ($tims as $tim)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-member">
                        <div class="image-box">
                            <img src="{{$tim->getImage()}}" alt="" style="width: 270px; height:286px; object-position: center; object-fit: cover;">
                            <div class="overlay">
                                <div class="hover-content">
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <h6>{{$tim->nama}}</h6>
                            <span>{{$tim->posisi}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class=" section-spacing">
    <div class="overlay">
        <div class="container">
            <div class="row">
                @if($tujuans->count() != null)
                @foreach ($tujuans as $tujuan)
                <div class="col-lg-2 col-sm-6 col-12 mb-1">
                    <div class="team-member">
                        <div class="image-box">
                            <a href="{{route('showTujuan',$tujuan->id)}}"><img src="{{$tujuan->getImage()}}" alt="" class="tujuanimg"></a>
                        </div> <!-- /.image-box -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
                <div class="col-lg-2 col-sm-6 col-12 mb-1">
                    <div class="team-member">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/TPB-Logo.jpg')}}" alt="" class="tujuanimg"></a>
                        </div> <!-- /.image-box -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.testimonial-section --> --}}

<script>
    .$(document).ready(function () {
        var owl = $('.owl-one');
        owl.owlCarousel({
            autoplay:true,
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 4
                },
                1000: {
                items: 4
                }
            }
        })
    });
</script>
@endsection
