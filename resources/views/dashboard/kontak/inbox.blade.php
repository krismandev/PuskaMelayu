@extends('layouts.dashboard.master')
@section('title')
    Pesan Masuk
@endsection
@section('content')
    <div class="row">
        <div class="white-box">
            <h3 class="box-title">Panel Pesan Masuk</h3>
            {{-- <p class="text-muted">Add class <code>.color-table .primary-table</code></p> --}}
            <div class="table-responsive">
                <table class="table color-table primary-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Subjek</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @if($inboxes->count() != null)
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($inboxes as $inbox)
                        <tr>
                            <td>{{$inboxes ->perPage()*($inboxes->currentPage()-1)+$i}}</td>
                            @php
                                $i++;
                            @endphp
                            <td>{{$inbox->nama}}</td>
                            <td>{{$inbox->email}}</td>
                            <td>{{date('d M Y / H:i',strtotime($inbox->created_at))}}</td>
                            <td>
                                <a href="{{route('showMessage',$inbox->id)}}" class="btn btn-primary">Buka</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
