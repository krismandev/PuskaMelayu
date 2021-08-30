@extends('layouts.dashboard.master')
@section('title')
    {{$report->judul}}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit Laporan {{$report->judul}}</h3>
            <form class="form-horizontal" action="{{route('updateReport')}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <label class="col-md-12">Judul</label>
                    <input type="hidden" value="{{$report->id}}" name="report_id">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{$report->judul}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}">{{$report->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{url('publikasi/'.$report->file)}}"><img src="{{url('publikasi/'.$report->gambar)}}" alt="" style="width:150px;"></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="file">
                                <small>*Abaikan jika tidak ingin mengganti file report</small>
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
