@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection
@section('content')
    <div class="container-fluid container-main">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content">
                            <h3>Registro</h3>
                            <p>
                                lorem ipsum dolor sit amet, consectet
                            </p>
                            <button class="btn-login transparent" id="sign-up-btn">
                                Registrate
                            </button>
                        </div>
                        <img src="{{ asset('img/log.svg') }}" class="image" alt="" />
                    </div>
                    <div class="panel right-panel">
                        <div class="content">
                            <h3>Bienvenido</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                                laboriosam ad deleniti.
                            </p>
                            <button class="btn-login transparent" id="sign-in-btn">
                                iniciar sesión
                            </button>
                        </div>
                        <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6 justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2 class="title">Registrate</h2>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                                {{-- <input type="text" placeholder="Username" /> --}}
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="email@dominion.com" required
                                    autocomplete="email">

                                {{-- <input type="email" placeholder="Email" /> --}}
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                    name="password" placeholder="********" required autocomplete="new-password">
                                {{-- <input type="password" placeholder="Password" /> --}}
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-field">
                                <i class="fas fa-lock"></i>

                                <input id="password-confirm" type="password" name="password_confirmation"
                                    placeholder="********" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn-login">
                                {{ __('Register') }}
                            </button>
                            <p class="social-text">O regístrate con plataformas sociales</p>
                            <div class="social-media">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row justify-content-center">

                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2 class="title">Iniciar sesión</h2>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="email@dominion.com" required
                                    autocomplete="email" autofocus>
                                {{-- <input type="text" placeholder="Username" /> --}}
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="*********">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn-login solid">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <p class="social-text">O inicia sesión con plataformas sociales</p>
                                    <div class="social-media">
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-google"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script src="{{ asset('js/login.js') }}"></script>
    @endsection
