@extends('layouts.dashboard.master')
@section('title')
    Pilar SDGs
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">4 Pilar SDGs </h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                @if ($pilars->count() >= 4)
                disabled
                @endif>Tambah</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pilar</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($pilars->count() != null)
                            @foreach ($pilars as $pilar)
                            <tr>
                                <td>{{$pilar->nama}}</td>
                                <td>
                                    <a href="{{url('pilar/'.$pilar->gambar)}}">
                                        <img src="{{url('pilar/'.$pilar->gambar)}}" alt="{{$pilar->nama_pilar}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <button class="btn btn-danger hapus-pilar" data-pilar_id="{{$pilar->id}}">Hapus</button>
                                    </a>
                                    <a href="{{url('pilar/'.$pilar->file)}}" target="_blank" class="btn btn-info">Download</a>
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


{{-- MODAL ADD pilar --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postPilar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Tulis judul disini..." name="nama" value="{{old('nama')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Gambar Sampul</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">File/Dokumen Pdf</label>
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
    $(".hapus-pilar").click(function (e) {
        const pilar_id = $(this).data("pilar_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus pilar ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/pilar-sdgs/delete/"+pilar_id;
            }
        });
    });
</script>
@endsection
