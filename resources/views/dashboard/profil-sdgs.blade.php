@extends('layouts.dashboard.master')
@section('title')
Profil Puska Melayu
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Profil Puska Melayu</h3>
            {{-- <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            <form class="form-horizontal" action="{{route('postProfil')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-12">Gambar</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="gambar">
                        <small>Abaikan jika tidak ingin mengubah gambar</small>
                    </div>
                    @if ($profil != null)


                    <div class="col-sm-6">
                        <img src="{{url('images/'.$profil->gambar)}}" alt="" style="width: 100%;">
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="content" value="{{old('content')}}">
                            @if ($profil != null)
                                {{$profil->content}}
                            @endif
                        </textarea>
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
