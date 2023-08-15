@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Dokumen')
@section('menuDocument', 'active')

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
                                <div class="card-header">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.document.create') }}">
                                        Tambah Data</a>
                                </div>
                                <div class="card-body">
                                    <table class='table table-striped' id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>File</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($documents as $document)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $document->name }}</td>
                                                    <td><a href="{{ url('storage/upload/document/' . $document->file) }}"
                                                            target="_blank">{{ $document->name }}</a>
                                                    </td>
                                                    <td>{{ $document->name }}</td>
                                                    <td>@include('admin.document.include.action')</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">Maaf, belum ada data</td>
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
