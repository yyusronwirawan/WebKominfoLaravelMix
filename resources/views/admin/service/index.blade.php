@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Layanan')
@section('menuLayanan', 'active')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Layanan</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.services.create') }}">
                                        Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class='table table-striped' id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Thumbnail</th>
                                                <th>URL</th>
                                                <th>Nama</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($services as $service)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('storage/upload/layanan/' . $service->thumbnail) }}"
                                                            class="img-thumbnail" width="200" height="150"
                                                            style="object-fit: cover" /></td>
                                                    </td>
                                                    <td><a href="https://{{ $service->url }}"
                                                            target="_blank">{{ $service->url }}</a></td>
                                                    <td>{{ $service->name }}</td>
                                                    <td>@include('admin.service.include.action')</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Maaf, belum ada data</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
