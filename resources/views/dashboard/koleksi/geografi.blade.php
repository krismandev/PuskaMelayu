@extends('layouts.dashboard.master')
@section('title')
    Geografi
@endsection
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Koleksi | Geografi</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah geografi</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped"  id="data_geografis_reguler">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($geografis->count() != null)
                            @foreach ($geografis as $geografi)

                            <tr>
                                <td>{{$geografi->deskripsi}}</td>
                                <td>
                                    <a href="{{url('koleksi/'.$geografi->gambar)}}">
                                        <img src="{{$geografi->getImage()}}" alt="{{$geografi->nama_geografi}}" style="max-width: 150px; max-height:100px;">
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger hapus-geografi" data-geografi_id="{{$geografi->id}}">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- MODAL ADD geografi --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postGeografi')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Desripsi</label>
                            <div class="col-md-12">
                                <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Gambar</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect">Simpan</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('linkfooter')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(".hapus-geografi").click(function (e) {
        const geografi_id = $(this).data("geografi_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/koleksi/geografi/delete/"+geografi_id;
            }
        });
    });

    $('#data_geografis_reguler').DataTable();
</script>
@endsection
