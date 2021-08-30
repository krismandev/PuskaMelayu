@extends('layouts.frontend.master')
@section('title')
    Berita
@endsection
@section('content')
<style>
    .blog-image{
        max-height: 500px;
    }

    .blog-inner-page{
        margin-top: 30px;
    }
</style>
<div class="blog-inner-page section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Berita</h2>
        </div> <!-- /.theme-title-one -->
        @if (isset($keyword))
        <span style="margin-bottom: 10px;">Hasil pencarian untuk "{{$keyword}}"</span>
        @endif
        <div class="row" style="margin-top: 5px;">
            @if ($beritas->count() != null)
            <div class="col-xl-9 col-lg-8 col-12 our-blog">
                <div class="post-wrapper">

                        @foreach ($beritas as $berita)
                        <div class="single-blog">
                            <div class="image-box">
                                <img src="{{url('images/'.$berita->gambar)}}" alt="" class="blog-image" style="object-fit: cover; object-position: center;">
                                <div class="overlay"><a href="#" class="date">{{date('d M Y',strtotime($berita->created_at))}}</a></div>
                            </div> <!-- /.image-box -->
                            <div class="post-meta">
                                <h5 class="title"><a href="{{route('showBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">{{$berita->judul}}</a></h5>
                                <p>{!!Str::limit($berita->konten,200)!!}</p>
                                <a href="{{route('showBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}" class="read-more">Baca selengkapnya...</a>
                            </div> <!-- /.post-meta -->
                        </div> <!-- /.single-blog -->
                        @endforeach

                </div> <!-- /.post-wrapper -->
                <div class="theme-pagination">
                    <ul>
                        {{$beritas->links()}}
                    </ul>
                </div>
            </div>
            @endif
            <!-- ===================== Blog Sidebar ==================== -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                <div class="sidebar-container sidebar-search">
                    <form action="{{route('berita')}}" method="get">
                        <input type="text" name="search" placeholder="Cari...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div> <!-- /.sidebar-search -->
                <div class="sidebar-container sidebar-recent-post">
                    <h5 class="title">Berita lainnya...</h5>
                    <ul>
                        @if ($beritaLainnya->count() != null)
                        @foreach ($beritaLainnya as $berita)
                        <li class="clearfix">
                            <img src="{{url('images/'.$berita->gambar)}}" alt="" class="float-left">
                            <div class="post float-left">
                                <a href="{{route('showBerita',['id'=>$berita->id,'slug'=>$berita->slug])}}">{{Str::limit($berita->judul,100)}}</a>
                                <div class="date">{{$berita->created_at->diffForHumans()}}</div>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div> <!-- /.sidebar-recent-post -->
            </div> <!-- /.col- -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
@endsection
