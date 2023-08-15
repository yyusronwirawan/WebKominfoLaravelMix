@extends('admin')
@section('title', 'Diskominfo Bone Bolango - Update Account')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Akun</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-header">Update Profil</h5>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('user-profile-information.update') }}">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label for="email">{{ __('E-mail Address') }}</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                                    id="email" placeholder="{{ __('E-mail Address') }}"
                                                    value="{{ old('email') ?? auth()->user()->email }}">

                                                @error('email', 'updateProfileInformation')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input type="text" name="name"
                                                    class="form-control  @error('name', 'updateProfileInformation') is-invalid @enderror"
                                                    id="name" placeholder="{{ __('Name') }}"
                                                    value="{{ old('name') ?? auth()->user()->name }}">
                                                @error('name', 'updateProfileInformation')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="username">{{ __('Username') }}</label>
                                                <input type="text" name="username"
                                                    class="form-control  @error('username', 'updateProfileInformation') is-invalid @enderror"
                                                    id="username" placeholder="{{ __('Username') }}"
                                                    value="{{ old('username') ?? auth()->user()->username }}">
                                                @error('username', 'updateProfileInformation')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{ __('Ubah Profil') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-header">Update Akun</h5>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('user-password.update') }}">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label for="password">{{ __('Password Saat Ini') }}</label>
                                                <input type="password" name="current_password"
                                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                                    id="password" placeholder="Password Saat Ini">
                                                @error('current_password', 'updatePassword')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">{{ __('Password Baru') }}</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                                    id="password" placeholder="Password Baru">
                                                @error('password', 'updatePassword')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label
                                                    for="password_confirmation">{{ __('Konfirmasi Password Baru') }}</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Konfirmasi Password Baru">
                                            </div>

                                            <button type="submit"
                                                class="btn btn-primary">{{ __('Ubah Password') }}</button>
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
