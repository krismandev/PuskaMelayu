@extends('layouts.dashboard.master')
@section('title')
    Dokumen
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Halaman dokumen</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah dokumen baru</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($dokumens->count() != null)
                            @foreach ($dokumens as $dokumen)

                            <tr>
                                <td>{{$dokumen->nama_dokumen}}</td>
                                <td>{!!Str::limit($dokumen->deskripsi,150)!!}</td>
                                <td>
                                    <a href="{{url('dokumen/'.$dokumen->gambar)}}">
                                        <img src="{{url('dokumen/'.$dokumen->gambar)}}" alt="{{$dokumen->nama_dokumen}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editDokumen',$dokumen->id)}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger hapus-dokumen" data-dokumen_id="{{$dokumen->id}}">Hapus</button>
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


{{-- MODAL ADD DOKUMEN --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postDokumen')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nama Dokumen</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Tulis judul disini..." name="nama_dokumen" value="{{old('nama_dokumen')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Desripsi</label>
                            <div class="col-md-12">
                                <textarea class="form-control ckeditor" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">File Dokumen</label>
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
    $(".hapus-dokumen").click(function (e) {
        const dokumen_id = $(this).data("dokumen_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus dokumen ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/dokumen/delete/"+dokumen_id;
            }
        });
    });
</script>
@endsection
