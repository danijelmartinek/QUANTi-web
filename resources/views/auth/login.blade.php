@extends('layouts.app')

@section('content')
  <main>
    <div class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4 z-depth-2 login-register">
            <div class="flow-text indigo-text">Prijava</div>
            <div class="divider lr-title-line"></div>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
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

                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">Lozinka</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <!--
                <p class="col s12">
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember">Zapamti me</label>
                </p>
                -->

                <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light indigo">Prijavi se</button>
                    <p>
                        <a class="pink-text" href="{{ url('/password/reset') }}">Zaboravljena lozinka?</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="col s12 m6 l4 offset-m3 offset-l4 create-acc">
          <a class="center" href="/register"><h6 class="indigo-text"><b>Registracija<b></h6></a>
        </div>
    </div>
  </main>
@endsection
