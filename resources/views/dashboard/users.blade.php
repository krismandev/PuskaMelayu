@extends('layouts.dashboard.master')
@section('title')
    Daftar Admin
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Daftar Admin</h3>
            <div class="text-right">
                <a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah baru</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->count() != null)
                            @foreach ($users as $user)

                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{url('user/'.$user->gambar)}}">
                                        <img src="{{url('user/'.$user->gambar)}}" alt="{{$user->name}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger hapus-user" data-user_id="{{$user->id}}">Hapus</button>
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


{{-- MODAL ADD user --}}
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{route('postUser')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Nama..." name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email..." name="email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Foto</label>
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
    $(".hapus-user").click(function (e) {
        const user_id = $(this).data("user_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus user ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/user/delete/"+user_id;
            }
        });
    });
</script>
@endsection
