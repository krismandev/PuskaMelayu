@extends('layouts.dashboard.master')
@section('title')
    Tambah Berita
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Research</h3>
            {{-- <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            <form class="form-horizontal" action="{{route('postResearch')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-12">Judul Penelitian</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{old('judul')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Penulis</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Maasukkan nama penulis" name="penulis" value="{{old('penulis')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Tahun</label>
                    <div class="col-md-12">
                        <input type="number" class="form-control"  name="tahun" value="{{old('tahun')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Abstrak</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="abstrak" value="{{old('abstrak')}}"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('linkfooter')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
