@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(($member->approved) == 1 )
            <div class="col s12 m6 l6" style="margin-top: 50px; margin-bottom: 50px;">
                <h5>Kontaktirajte nas</h5>
                <div class="divider"></div>
                <br>
                <form action="{{ url('contact') }}" method="POST" class="contact">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="subject">Ime i prezime</label>
                        <input id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Sadržaj:</label>
                        <textarea class="height: 200px;"></textarea>
                    </div>

                    <input type="submit" value="Pošalji" class="btn btn-success">
                </form>
            </div>
            @endif

            <div class="col s1 m1 l1">
              <div class="vdivider center"></div>
            </div>
            <br><br>

            <div class="col s11 m5 l5 divider"></div>
            <div class="col s11 m5 l5">
              <br><br>
              <p>Postani članom naše inicijative! </p>
              <div class="center"  onclick="location.href='{{ url('/membership/register') }}';"><a class="waves-effect waves-light btn indigo">UČLANI SE</a></div>
            </div>
        </div>
    </div>

@endsection
