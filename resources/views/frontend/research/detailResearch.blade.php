@extends('layouts.frontend.master')
@section('title')
    {{$research->judul}}
@endsection
@section('content')
<style>
    .blog-grid{
        margin-top: 20px;
    }

    .buku{
        max-height: 250px;
    }
</style>
<div class="blog-grid section-spacing">
    <div class="container">
        <div class="theme-title-one">

        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-12 our-blog">
                <div class="post-wrapper row">

                    <div class="col-lg-9 col-12">
                        <div class="row" style="margin-bottom: 20px;">
                            <h4>{{$research->judul}} ({{$research->tahun}})</h4>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <span>By </span><span> {{$research->penulis}}</span>
                        </div>
                        <div class="row" style="margin-bottom: 10px;">
                            <b>Abstract</b>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <p>{!!$research->abstrak!!}</p>
                        </div>
                        <div class="row">
                            <a href="{{url('research/'.$research->file)}}" target="_blank">Download PDF</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <img src="{{url('research/'.$research->gambar)}}" width="100%;">
                    </div>

                </div> <!-- /.post-wrapper -->
            </div>
            <!-- ===================== Blog Sidebar ==================== -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
{{-- <div class="blog-grid section-spacing">
    <div class="container">
        <div class="col-lg-9 col-12">
            <div class="row" style="margin-bottom: 20px;">
                <h4>{{$research->judul}} ({{$research->tahun}})</h4>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <span>By </span><span> {{$research->penulis}}</span>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <b>Abstract</b>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <p>{!!$research->abstrak!!}</p>
            </div>
            <div class="row">
                <a href="{{url('research/'.$research->file)}}" target="_blank">Download PDF</a>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <img src="{{url('research/'.$research->gambar)}}" width="100px;">
        </div>
    </div> <!-- /.container -->
</div> --}}
@endsection
