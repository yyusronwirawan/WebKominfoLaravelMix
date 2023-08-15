@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Layanan')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profil</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ $profile->title }}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        {!! $profile->body !!}
                                    </div>

                                    <a class="btn btn-md btn-primary mt-2"
                                        href="{{ route('admin.profile.edit', $profile->slug) }}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
