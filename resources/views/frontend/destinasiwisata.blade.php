@extends('layouts.frontend.master')
@section('title')
    {{$title}}
@endsection
@section('content')

<div class="our-team section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Destinasi Wisata {{$title}}</h2>
            {{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
        </div> <!-- /.theme-title-one -->
        <div class="wrapper">
            <div class="row">
                @if($destinasis != null)
                @foreach ($destinasis as $destinasi)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-member">
                        <div class="image-box">
                            <a href="{{$destinasi->getImage()}}" data-fancybox="gallery">
                                <img src="{{$destinasi->getImage()}}" alt="">
                                <div class="overlay">
                                    {{-- <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <p>The government they survive as soldiers of fortune.</p>
                                    </div> <!-- /.hover-content --> --}}
                                </div> <!-- /.overlay -->
                            </a>
                        </div> <!-- /.image-box -->
                        <div class="text">
                            <h6>{{$destinasi->deskripsi}}</h6>
                            {{-- <span>Sales Consultant</span> --}}
                        </div> <!-- /.text -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.our-team -->
@endsection
