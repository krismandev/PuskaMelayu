@extends('layouts.dashboard.master')
@section('title')
    Kota Jambi
@endsection
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Destinasi Wisata | Kota Jambi</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="data_kotajambis_reguler">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($kotajambis->count() != null)
                            @foreach ($kotajambis as $kotajambi)

                            <tr>
                                <td>{{$kotajambi->deskripsi}}</td>
                                <td>
                                    <a href="{{url('koleksi/'.$kotajambi->gambar)}}">
                                        <img src="{{$kotajambi->getImage()}}" alt="{{$kotajambi->nama_kotajambi}}" style="max-width: 150px; max-height:100px;">
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger hapus-kotajambi" data-kotajambi_id="{{$kotajambi->id}}">Hapus</button>
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


{{-- MODAL ADD kotajambi --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postKotaJambi')}}" method="POST" enctype="multipart/form-data">
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
    $(".hapus-kotajambi").click(function (e) {
        const kotajambi_id = $(this).data("kotajambi_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/destinasi-wisata/kota-jambi/delete/"+kotajambi_id;
            }
        });
    });

    $('#data_kotajambis_reguler').DataTable();
</script>
@endsection
