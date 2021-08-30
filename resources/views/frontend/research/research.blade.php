@extends('layouts.frontend.master')
@section('title')
    Buku
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
            <h2>Our Research</h2>
        </div>
        <div class="row" style="margin-top: 20px;">
            @foreach ($researchs as $research)
            <div class="col-md-8 col-12">
                <a href="{{route('detailResearch',$research->id)}}"><h3>{{$research->judul}}</h3></a>
                <p>{!!Str::limit($research->abstrak,400)!!}</p>
            </div>
            <div class="col-md-4 col-12">
                <img src="{{url('research/'.$research->gambar)}}" width="100px;">
            </div>
            @endforeach
            <!-- ===================== Blog Sidebar ==================== -->
            <div>
                {{$researchs->links()}}
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
@endsection
