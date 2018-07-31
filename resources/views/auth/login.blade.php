@extends('layouts.app')

@section('content')
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{url('img/bg-3.jpg') }});">
            <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                <div class="m-login__container">
                    <div class="m-login__logo">
                        <a href="#">
                            <img src="{{ asset('img/sopra.png') }}">
                        </a>
                    </div>
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">
                                Connexion
                            </h3>
                        </div>
                        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- <div class="form-group m-form__group">
                                 <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} m-input"   type="text" placeholder="Identifiant" name="email" value="{{ old('email') }}" required autofocus>

                                 @if ($errors->has('email'))
                                     <span class="invalid-feedback">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                 @endif
                             </div>--}}
                            <div class="form-group m-form__group">
                                <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} m-input"   type="text" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} "  type="password" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row m-login__form-sub">
                                <div class="col m&#45;&#45;align-left m-login__form-left">
                                    <label class="m-checkbox  m-checkbox&#45;&#45;focus">
                                        <input type="checkbox" name="remember">
                                        Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col m&#45;&#45;align-right m-login__form-right">
                                    <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                        Forget Password ?
                                    </a>
                                </div>
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn&#45;&#45;pill m-btn&#45;&#45;custom m-btn&#45;&#45;air m-login__btn m-login__btn&#45;&#45;primary" type="submit">
                                    Se connecter
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
