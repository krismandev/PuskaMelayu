@extends('layouts.dashboard.master')
@section('title')
    Webinar
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Kegiatan Webinar</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah webinar</button></a>
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
                        @if ($webinars->count() != null)
                            @foreach ($webinars as $webinar)

                            <tr>
                                <td>{{$webinar->deskripsi}}</td>
                                <td>
                                    <a href="{{url('kegiatan/'.$webinar->gambar)}}">
                                        <img src="{{url('kegiatan/'.$webinar->gambar)}}" alt="{{$webinar->deskripsi}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger hapus-webinar" data-webinar_id="{{$webinar->id}}">Hapus</button>
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


{{-- MODAL ADD webinar --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postWebinar')}}" method="POST" enctype="multipart/form-data">
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
    $(".hapus-webinar").click(function (e) {
        const webinar_id = $(this).data("webinar_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus webinar ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/kegiatan/webinar/delete/"+webinar_id;
            }
        });
    });
</script>
@endsection
