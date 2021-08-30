@extends('layouts.dashboard.master')
@section('title')
    Pengabdian
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Kegiatan Pengabdian</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah</button></a>
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
                        @if ($pengabdians->count() != null)
                            @foreach ($pengabdians as $pengabdian)

                            <tr>
                                <td>{{$pengabdian->deskripsi}}</td>
                                <td>
                                    <a href="{{url('kegiatan/'.$pengabdian->gambar)}}">
                                        <img src="{{url('kegiatan/'.$pengabdian->gambar)}}" alt="{{$pengabdian->deskripsi}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger hapus-pengabdian" data-pengabdian_id="{{$pengabdian->id}}">Hapus</button>
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


{{-- MODAL ADD pengabdian --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postPengabdian')}}" method="POST" enctype="multipart/form-data">
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
    $(".hapus-pengabdian").click(function (e) {
        const pengabdian_id = $(this).data("pengabdian_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus pengabdian ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/kegiatan/pengabdian/delete/"+pengabdian_id;
            }
        });
    });
</script>
@endsection
