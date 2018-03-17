@extends('layouts.app')



@section('content')

<div class="row">

    <div class="col s12 m6 l4 offset-m3 offset-l4 z-depth-2 login-register">

      <div class="flow-text indigo-text">Reset Lozinke</div>

      <div class="divider lr-title-line"></div>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">

            {{ csrf_field() }}



            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">

                <input type="email" name="email" id="email" value="{{ $email or old('email') }}" class="validate">

                <label for="email">E-Mail Adresa</label>

                @if ($errors->has('email'))

                    <span class="red-text">

                        <strong>{{ $errors->first('email') }}</strong>

                    </span>

                @endif

            </div>



            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">

                <input id="password" type="password" class="validate" name="password">

                <label for="password">Lozinka</label>

                @if ($errors->has('password'))

                    <span class="red-text">

                        <strong>{{ $errors->first('password') }}</strong>

                    </span>

                @endif

            </div>

            <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                <input id="password-confirm" type="password" class="validate" name="password_confirmation">

                <label for="password-confirm">Potvrdi Lozinku</label>

                @if ($errors->has('password_confirmation'))

                    <span class="red-text">

                        <strong>{{ $errors->first('password_confirmation') }}</strong>

                    </span>

                @endif

            </div>

            <div class="input-field col s12">

                <button type="submit" class="btn waves-effect waves-light">Reset</button>

            </div>

        </form>

    </div>

</div>

@endsection


