@extends('layouts.dashboard.master')
@section('title')
    {{$dokumen->nama_dokumen}}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit dokumen {{$dokumen->nama_dokumen}}</h3>
            <form class="form-horizontal" action="{{route('updateDokumen')}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <label class="col-md-12">Nama Dokumen</label>
                    <input type="hidden" value="{{$dokumen->id}}" name="dokumen_id">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="nama_dokumen" value="{{$dokumen->nama_dokumen}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}">{{$dokumen->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{url('dokumen/'.$dokumen->file)}}"><img src="{{url('dokumen/'.$dokumen->gambar)}}" alt="" style="width:150px;"></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="file">
                                <small>*Abaikan jika tidak ingin mengganti file dokumen</small>
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
