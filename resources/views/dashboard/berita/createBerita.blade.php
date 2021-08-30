@extends('layouts.dashboard.master')
@section('title')
    Tambah Berita
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
            <form class="form-horizontal" action="{{route('postBerita')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-12">Judul Berita</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{old('judul')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Konten</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="konten" value="{{old('konten')}}"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Gambar</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="gambar">
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
