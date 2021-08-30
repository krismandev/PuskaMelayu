@extends('layouts.dashboard.master')
@section('title')
    Jurnal
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Halaman jurnal</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah jurnal</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($jurnals->count() != null)
                            @foreach ($jurnals as $jurnal)

                            <tr>
                                <td>{{$jurnal->judul}}</td>
                                <td>{!!Str::limit($jurnal->deskripsi,150)!!}</td>
                                <td>
                                    <a href="{{url('publikasi/'.$jurnal->gambar)}}">
                                        <img src="{{$jurnal->getImage()}}" alt="{{$jurnal->nama_jurnal}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editJurnal',$jurnal->id)}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger hapus-jurnal" data-jurnal_id="{{$jurnal->id}}">Hapus</button>
                                    <a href="{{url('publikasi/'.$jurnal->file)}}" target="_blank">
                                        <button class="btn btn-info">Download</button>
                                    </a>
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


{{-- MODAL ADD jurnal --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postJurnal')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Judul</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Tulis judul disini..." name="judul" value="{{old('judul')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Desripsi</label>
                            <div class="col-md-12">
                                <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">File jurnal</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="file">
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
    $(".hapus-jurnal").click(function (e) {
        const jurnal_id = $(this).data("jurnal_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus jurnal ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/jurnal/delete/"+jurnal_id;
            }
        });
    });
</script>
@endsection
