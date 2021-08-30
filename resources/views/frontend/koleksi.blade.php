@extends('layouts.frontend.master')
@section('title')
    {{$title}}
@endsection
@section('content')
<div class="our-case our-project section-spacing">
    <div class="container">
        <div class="theme-title-one" style="margin-top: 15px;">
            <h2>Koleksi | {{$title}}</h2>
        </div>
        <div class="wrapper">
            <div class="row">
                @if ($koleksis != null)


                @foreach ($koleksis as $koleksi)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-case-block">
                        <a href="{{$koleksi->getImage()}}">
                            <img src="{{$koleksi->getImage()}}" alt="" style="width:360px; height: 310px; object-position: center; object-fit: cover;">
                            <div class="hover-content">
                                <div class="text clearfix">
                                    <div class="float-left">
                                        {{-- <h5><a href="project-details.html">Business Meeting</a></h5> --}}
                                        <p>{{$koleksi->deskripsi}}</p>
                                    </div>
                                    {{-- <a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                                </div> <!-- /.text -->
                            </div> <!-- /.hover-content -->
                        </a>
                    </div> <!-- /.single-case-block -->
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
        <div class="theme-pagination text-center">
            <ul>
                {{-- <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> --}}
                {{$koleksis->links()}}
            </ul>
        </div>
    </div> <!-- /.container -->
</div>
@endsection
