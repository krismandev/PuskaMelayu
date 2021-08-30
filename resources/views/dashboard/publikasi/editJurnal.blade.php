@extends('layouts.dashboard.master')
@section('title')
    {{$jurnal->judul}}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit jurnal {{$jurnal->judul}}</h3>
            <form class="form-horizontal" action="{{route('updateJurnal')}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <label class="col-md-12">Judul</label>
                    <input type="hidden" value="{{$jurnal->id}}" name="jurnal_id">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{$jurnal->judul}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}">{{$jurnal->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{url('publikasi/'.$jurnal->file)}}"><img src="{{url('publikasi/'.$jurnal->gambar)}}" alt="" style="width:150px;"></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="file">
                                <small>*Abaikan jika tidak ingin mengganti file jurnal</small>
                            </div>
                        </div>
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
