@extends('layouts.dashboard.master')
@section('title')
    Tujuan
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Tujuan</h3>
            {{-- <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p> --}}
            <form class="form-horizontal" action="{{route('postTujuanTentang')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control ckeditor" name="tujuan" value="{{old('tujuan')}}">
                            @if ($tujuan != null)
                                {{$tujuan->tujuan}}
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
