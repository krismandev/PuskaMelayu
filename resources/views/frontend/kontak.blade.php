@extends('layouts.frontend.master')
@section('title')
    Kontak
@endsection
@section('content')
<div class="contact-us-section section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Hubungi Kami</h2>
            <p>Hubungi kami dengan mengisi form dibawah ini.</p>
        </div> <!-- /.theme-title-one -->
        <div class="clearfix main-content no-gutters row">
            <div class="col-lg-5 col-12"><div class="img-box"></div></div>
            <div class="col-lg-7 col-12">
                <div class="form-wrapper">
                    <form action="{{route('postKontak')}}" class="theme-form-one form-validation" autocomplete="off" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Nama *" name="nama">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="email" placeholder="Email *" name="email">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="HP *" name="hp">
                            </div>
                            <div class="col-sm-12 col-12">
                                <input type="text" placeholder="Subjek *" name="subject">
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Pesan" name="pesan">Pesan ... *</textarea>
                            </div>
                        </div> <!-- /.row -->
                        <button class="theme-button-one">SEND MESSAGE</button>
                    </form>
                </div> <!-- /.form-wrapper -->
            </div> <!-- /.col- -->
        </div> <!-- /.main-content -->
    </div> <!-- /.container -->

    <!--Contact Form Validation Markup -->
    <!-- Contact alert -->
    <div class="alert-wrapper" id="alert-success">
        <div id="success">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                   <p>Your message was sent successfully.</p>
             </div>
        </div>
    </div> <!-- End of .alert_wrapper -->
    <div class="alert-wrapper" id="alert-error">
        <div id="error">
               <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
               <div class="wrapper">
                   <p>Sorry!Something Went Wrong.</p>
            </div>
        </div>
    </div> <!-- End of .alert_wrapper -->
</div> <!-- /.contact-us-section -->
@endsection
