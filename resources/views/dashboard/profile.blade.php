@extends('layouts.dashboard.master')
@section('title')
    Profil Saya
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="{{$user->getImage()}}" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white"></h4>
                        <h5 class="text-white">{{$user->email}}</h5>
                    </div>
                    <div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ganti Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <ul class="nav nav-tabs tabs customtab">
                <li class="active tab">
                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Edit Profile</span> </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <form class="form-horizontal form-material" action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12">Nama Lengkap</label>
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="text" placeholder="" class="form-control form-control-line" value="{{$user->name}}" name="name"> </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="" class="form-control form-control-line" name="email" id="example-email" value="{{$user->email}}"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Foto</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel"></h4> </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{route('updatePassword')}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <div class="form-group">
                        <label class="col-md-12">Masukkan Password Baru</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password">
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
