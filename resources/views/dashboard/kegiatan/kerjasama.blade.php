@extends('layouts.dashboard.master')
@section('title')
    Kerja sama
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Kegiatan Kerja sama</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah kegiatan</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($kerjasamas->count() != null)
                            @foreach ($kerjasamas as $kerjasama)

                            <tr>
                                <td>{{$kerjasama->deskripsi}}</td>
                                <td>
                                    <a href="{{url('kegiatan/'.$kerjasama->gambar)}}">
                                        <img src="{{url('kegiatan/'.$kerjasama->gambar)}}" alt="{{$kerjasama->deskripsi}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger hapus-kerjasama" data-kerjasama_id="{{$kerjasama->id}}">Hapus</button>
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


{{-- MODAL ADD kerjasama --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postKerjaSama')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Deskripsi</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Deskripsi..." name="deskripsi" value="{{old('deskripsi')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Gambar / Poster</label>
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
    $(".hapus-kerjasama").click(function (e) {
        const kerjasama_id = $(this).data("kerjasama_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus kerjasama ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/kegiatan/kerja-sama/delete/"+kerjasama_id;
            }
        });
    });
</script>
@endsection
