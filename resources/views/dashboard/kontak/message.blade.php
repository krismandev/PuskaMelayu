@extends('layouts.dashboard.master')
@section('title')
    Pesan dari {{$inbox->nama}}
@endsection
@section('content')
<div class="row">
    <!-- Left sidebar -->
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-lg-12 col-md-9 col-sm-8 col-xs-12 mail_listing">
                    <div class="media m-b-30 p-t-20">
                        <h4 class="font-bold m-t-0">{{$inbox->subject}}</h4>
                        <hr>
                        <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="{{asset('dashboard/user-male.png')}}" alt=""> </a>
                        <div class="media-body"> <span class="media-meta pull-right">{{date('d m Y H:i',strtotime($inbox->created_at))}}</span>

                            <h4 class="text-danger m-0">{{$inbox->nama}}</h4> <small class="text-muted">Email: {{$inbox->email}}</small> <br><b>{{$inbox->hp}}</b> </div>
                    </div>
                    <p>{{$inbox->pesan}}</p>
                    {{-- <hr> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
