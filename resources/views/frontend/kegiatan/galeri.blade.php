@extends('layouts.frontend.master')
@section('title')
    Galeri
@endsection
@section('content')
<div class="blog-grid section-spacing" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-12 our-blog">
                <div class="post-wrapper row">
                    @if ($galeris->count() != null)
                    @foreach ($galeris as $galeri)
                        <div class="col-md-3 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <a href="{{url('galeri/'.$galeri->gambar)}}" data-fancybox="gallery">
                                        <img src="{{url('galeri/'.$galeri->gambar)}}" alt="" class="galeri">
                                    </a>
                                </div> <!-- /.image-box -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                    @endforeach
                    @endif
                </div> <!-- /.post-wrapper -->
                <div class="row">
                    {{$galeris->links()}}
                </div>
            </div>
            <!-- ===================== Blog Sidebar ==================== -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
@endsection
