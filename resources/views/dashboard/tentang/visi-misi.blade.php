@extends('layouts.dashboard.master')
@section('title')
    Visi Misi
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" action="{{route('postVisiMisi')}}" method="POST" enctype="multipart/form-data">
        <div class="white-box">
            <h3 class="box-title m-b-0">Visi</h3>
            {{-- <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="visi" value="{{old('visi')}}">
                            @if ($visimisi != null)
                                {{$visimisi->visi}}
                            @endif
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
        </div>
        <div class="white-box">
            <h3 class="box-title m-b-0">Misi</h3>
            {{-- <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="misi" value="{{old('misi')}}">
                            @if ($visimisi != null)
                                {{$visimisi->misi}}
                            @endif
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
@endsection
@section('linkfooter')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
