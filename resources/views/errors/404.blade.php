@extends('dashboard')
@section('title', '404 Page Not Found')

@section('content')
    <div class="main-banner wow fadeIn " id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="right-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <img src="{{ asset('template/dashboard') }}/images/404.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">

                                <h2>404 NOT FOUND PAGE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
