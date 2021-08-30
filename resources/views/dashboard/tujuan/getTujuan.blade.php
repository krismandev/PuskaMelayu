@extends('layouts.dashboard.master')
@section('title')
    Halaman tujuan
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Halaman tujuan</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="40%">Nama</th>
                            <th width="40%">Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($tujuans->count() != null)
                            @foreach ($tujuans as $tujuan)

                            <tr>
                                <td>{{$tujuan->nama}}</td>
                                <td>
                                    <a href="{{url('images/'.$tujuan->getImage())}}">
                                        <img src="{{url('images/'.$tujuan->getImage())}}" alt="{{$tujuan->judul}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editTujuan',$tujuan->id)}}">
                                        <button class="btn btn-primary">Buka</button>
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
@endsection
@section('footer')
<script>
$(".hapus-tujuan").click(function (e) {
    e.preventDefault();
    const tujuan_id = $(this).data('tujuan_id');
    swal({
        title: "Yakin?",
        text: "Akan menghapus tujuan ini?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location = "/admin/tujuan/delete/"+tujuan_id;
        }
    });
});
</script>
@endsection
