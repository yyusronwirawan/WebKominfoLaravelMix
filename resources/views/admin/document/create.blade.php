@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Create Layanan')
@section('menuDokumen', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Dokumen</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-header">Tambah Dokumen</h5>
                                    <div class="card-body">
                                        <form action="{{ route('admin.document.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @include('admin.document.include.form')
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                                <a href="{{ route('admin.document.index') }}"
                                                    class="btn btn-outline-secondary">Kembali</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
