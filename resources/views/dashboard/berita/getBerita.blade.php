@extends('layouts.dashboard.master')
@section('title')
    Halaman Berita
@endsection
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Halaman Berita</h3>
            <div class="text-right">
                <a href="{{route('createBerita')}}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Buat berita baru</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" id="data_beritas_reguler">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($beritas->count() != null)
                            @foreach ($beritas as $berita)

                            <tr>
                                <td>{{$berita->judul}}</td>
                                <td>{!!Str::limit($berita->konten,150)!!}</td>
                                <td>
                                    <a href="{{url('images/'.$berita->gambar)}}">
                                        <img src="{{url('images/'.$berita->gambar)}}" alt="{{$berita->judul}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editBerita',$berita->id)}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <a href="#" class="btn btn-danger hapus-berita" data-berita_id="{{$berita->id}}">Hapus</a>
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
@endsection
@section('linkfooter')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

$(".hapus-berita").click(function (e) {
    const berita_id = $(this).data('berita_id');
    swal({
        title: "Yakin?",
        text: "Akan menghapus berita ini?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location = "/admin/berita/delete/"+berita_id;
        }
    });
});

$('#data_beritas_reguler').DataTable();
</script>
@endsection
