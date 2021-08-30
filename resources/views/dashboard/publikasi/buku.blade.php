@extends('layouts.dashboard.master')
@section('title')
    Buku
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Halaman buku</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah buku</button></a>
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
                        @if ($bukus->count() != null)
                            @foreach ($bukus as $buku)

                            <tr>
                                <td>{{$buku->judul}}</td>
                                <td>{!!Str::limit($buku->deskripsi,150)!!}</td>
                                <td>
                                    <a href="{{url('publikasi/'.$buku->gambar)}}">
                                        <img src="{{url('publikasi/'.$buku->gambar)}}" alt="{{$buku->nama_buku}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editBuku',$buku->id)}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger hapus-buku" data-buku_id="{{$buku->id}}">Hapus</button>
                                    <a href="{{url('publikasi/'.$buku->file)}}" target="_blank">
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


{{-- MODAL ADD buku --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postBuku')}}" method="POST" enctype="multipart/form-data">
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
                            <label class="col-sm-12">File buku</label>
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
    $(".hapus-buku").click(function (e) {
        const buku_id = $(this).data("buku_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus buku ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/buku/delete/"+buku_id;
            }
        });
    });
</script>
@endsection
