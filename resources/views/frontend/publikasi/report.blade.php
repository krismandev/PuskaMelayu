@extends('layouts.frontend.master')
@section('title')
    Annual Report
@endsection
@section('content')
<style>
    .blog-grid{
        margin-top: 20px;
    }

    .report{
        max-height: 250px;
    }
</style>
<div class="blog-grid section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Publikasi | Annual Report</h2>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-12 our-blog">
                <div class="post-wrapper row">
                    @if ($reports->count() != null)
                    @foreach ($reports as $report)
                        <div class="col-md-4 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{url('publikasi/'.$report->gambar)}}" alt="" class="report">
                                    <div class="overlay"><a href="{{url('publikasi/'.$report->file)}}" class="date"> <i class="fa fa-download"></i> </a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{url('publikasi/'.$report->file)}}">{{$report->judul}}</a></h5>
                                    <p>{{$report->deskripsi}}</p>
                                    {{-- <a href="blog-details.html" class="read-more">READ MORE</a> --}}
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                    @endforeach
                    @endif
                </div> <!-- /.post-wrapper -->


                            {{$reports->links()}}
                        {{-- <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> --}}
            </div>
            <!-- ===================== Blog Sidebar ==================== -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>
@endsection
