@extends('layouts.dashboard.master')
@section('title')
    Research
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3 class="box-title">Our Research</h3>
            <div class="text-right">
                <a href="{{route('createResearch')}}"><button class="btn btn-primary">Tambah</button></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Abstrak</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($researchs->count() != null)
                            @foreach ($researchs as $research)
                            <tr>
                                <td>{{$research->judul}}</td>
                                <td>{!!Str::limit($research->abstrak,150)!!}</td>
                                <td>
                                    <a href="{{url('research/'.$research->gambar)}}">
                                        <img src="{{url('research/'.$research->gambar)}}" alt="{{$research->nama_research}}" style="max-width: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('editResearch',$research->id)}}">
                                        <button class="btn btn-primary">Edit</button>
                                    </a>
                                    <button class="btn btn-danger hapus-research" data-research_id="{{$research->id}}">Hapus</button>
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


{{-- MODAL ADD research --}}
@endsection
@section('linkfooter')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(".hapus-research").click(function (e) {
        const research_id = $(this).data("research_id");

        swal({
            title: "Yakin?",
            text: "Mau menghapus research ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/research/delete/"+research_id;
            }
        });
    });
</script>
@endsection
