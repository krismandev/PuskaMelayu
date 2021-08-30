@extends('layouts.dashboard.master')
@section('title')
    Edit Berita
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit Berita</h3>
            <b><p class="text-muted m-b-30 font-13"> {{$berita->judul}} </p></b>
            <form class="form-horizontal" action="{{route('updateBerita')}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <input type="hidden" value="{{$berita->id}}" name="berita_id">
                    <label class="col-md-12">Judul Berita</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{$berita->judul}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Konten</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="konten" value="{{$berita->konten}}">{{$berita->konten}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Gambar</label>
                    <div class="col-sm-6">
                        {{-- <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                            <input type="file" name="gambar"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div> --}}
                        <input type="file" class="form-control" name="gambar">
                        <small>Abaikan jika tidak ingin mengubah gambar</small>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{url('images/'.$berita->gambar)}}" alt="" style="width: 100%;">
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
@section('footer')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
