@extends('layouts.frontend.master')
@section('title')
    Pengurus
@endsection
@section('content')

<div class="our-team section-spacing">
    <div class="container">
        <div class="theme-title-one" style="margin-top: 15px;">
            <h2>Pengurus</h2>
        </div>
        <div class="wrapper">
            <div class="row">
                @if ($tims != null)
                @foreach ($tims as $tim)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-member">
                        <div class="image-box">
                            <img src="{{$tim->getImage()}}" alt="" style="width: 270px; height:286px; object-position: center; object-fit: cover;">
                            <div class="overlay">
                                <div class="hover-content">
                                    {{-- <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <p>The government they survive as soldiers of fortune.</p> --}}
                                </div> <!-- /.hover-content -->
                            </div> <!-- /.overlay -->
                        </div> <!-- /.image-box -->
                        <div class="text">
                            <h6>{{$tim->nama}}</h6>
                            <span>{{$tim->posisi}}</span>
                        </div> <!-- /.text -->
                    </div> <!-- /.team-member -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </div> <!-- /.container -->
</div>

@endsection
