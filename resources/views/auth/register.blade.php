@extends('layouts.inicio', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Learning Kids')])



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
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="card card-login card-hidden mb-3">
                        <div class="card-header card-header-info text-center">
                            <h4 class="card-title"><strong>{{ __('Registrarse') }}</strong></h4>
                            <img  src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="100">

                        </div>
                        <div class="card-body ">

                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre ') }}" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('Correo') }}" value="{{ old('email') }}" required>
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
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña') }}" required>
                                </div>
                                @if ($errors->has('password'))
                                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                                    </div>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña')}}" required>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">


                                    <span class="check"></span>
                                    </span>

                                </label>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-info btn-link btn-lg">{{ __('Crear Cuenta') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
