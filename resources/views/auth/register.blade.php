@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s12 m6 l4 offset-m3 offset-l4 z-depth-2 login-register">
        <div class="flow-text indigo-text">Registracija</div>
        <div class="divider lr-title-line"></div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                  <label for="name">Ime i Prezime</label>
                    @if ($errors->has('name'))
                        <span class="red-text">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email">E-mail Adresa</label>
                    @if ($errors->has('email'))
                        <div class="col s12">
                            <span class="red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">Lozinka</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                    <label>Potvrdi Lozinku</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light indigo">Registriraj se</button>
                        <p>
                          Registriran/a si? <a class="indigo-text" href="{{ url('/login') }}">Prijavi se.</a>
                        </p>
                    </div>
                </form>
            </div>
    </div>
@endsection
