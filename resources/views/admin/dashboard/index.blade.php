@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Beranda Admin')
@section('menuDashboard', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Dashboard</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Hi 👋, {{ auth()->user()->name }}</h4>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    @endsection
