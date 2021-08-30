@extends('layouts.dashboard.master')
@section('title')
    Edit Data Research
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit</h3>
            <b><p class="text-muted m-b-30 font-13"> {{$research->judul}} </p></b>
            <form class="form-horizontal" action="{{route('updateResearch')}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <input type="hidden" value="{{$research->id}}" name="research_id">
                    <label class="col-md-12">Judul</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{$research->judul}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Penulis</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="" name="penulis" value="{{$research->penulis}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Tahun</label>
                    <div class="col-md-12">
                        <input type="number" class="form-control" placeholder="" name="tahun" value="{{$research->tahun}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Abstrak</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="editor" name="abstrak" value="{{$research->abstrak}}">{{$research->abstrak}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File</label>
                    <div class="col-sm-5">
                        {{-- <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                            <input type="file" name="gambar"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div> --}}
                        <input type="file" class="form-control" name="file">
                        <small>Abaikan jika tidak ingin mengubah file</small>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <a href="{{url('research/'.$research->file)}}" target="_blank">Download</a>
                        </div>
                        <div class="row">
                            <img src="{{url('research/'.$research->gambar)}}" alt="" style="width: 200px;">
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
@section('linkfooter')
{{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection
