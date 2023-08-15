@extends('layout.auth')

@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>
                    <form action="{{ route('login') }}" method="POST">

                        @csrf
                        <div class="form-group position-relative mb-4">
                            <input type="text" name="username" value="{{ old('username') }}"
                                class="form-control  @error('username') is-invalid @enderror form-control-xl"
                                placeholder="Masukkan Username" autocomplete="off" />
                            @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-4">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror form-control-xl"
                                placeholder="Masukkan Password" />
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
@endsection
