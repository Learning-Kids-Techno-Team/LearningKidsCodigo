@extends('layouts.inicio', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Learning Kids')])


<!-- Seguimiento -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JWFFJETEMQ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JWFFJETEMQ');
</script>


@section('content')
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
            <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                <h3>{{ __('Bienvenidos a Learning Kids') }} </h3>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card card-login card-hidden mb-3">
                        <div class="card-header card-header-info text-center">
                            <h4 class="card-title"><strong>{{ __('Inicio de sesión') }}</strong></h4>
                            <img  src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="100">
                        </div>
                        <div class="card-body">

                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
                                </div>
                                @if ($errors->has('password'))
                                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordar contraseña') }}
                                    <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-info btn-link btn-lg">{{ __('Ingresar') }}</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-light">
                                <small>{{ __('Olvidó su contraseña') }}</small>
                            </a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-light">
                            <small>{{ __('Crear nuevo usuario') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
