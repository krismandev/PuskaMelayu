@extends('layouts.frontend.master')
@section('title')
    Kontak
@endsection
@section('content')
<div class="about-compnay-two no-bg section-spacing">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text order-lg-last">
                    <div class="theme-title-one">
                        <h2>Tentang Kami</h2>
                    </div> <!-- /.theme-title-one -->
                    @if ($tentang->count() != null)
                    <p>{!!$tentang->tentang!!}</p>
                    @endif
                    <img src="images/home/sign-black.png" alt="" class="sign">
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.about-compnay-two -->


@endsection
