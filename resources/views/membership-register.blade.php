<head>

	<title>Zahtjev za članstvo</title>

</head>

@extends('layouts.app')

@section('content')
<main>
  <div class="row">
    <div class="col s12 m12 l12" style="margin-top: 50px;">
      <div class="col s12 m5 l4 offset-m1 offset-l2" style="margin-bottom: 50px;">
          <div class="flow-text indigo-text">Zahtjev za članstvo</div>
          <div class="divider lr-title-line"></div>
          <form role="form" method="POST" action="{{ url('/membership/register') }}">
              {{ csrf_field() }}

              <div class="input-field col s12">
                <input id="firstname" type="text" class="validate" name="firstname" required>
                <label for="firstname">Ime</label>
              </div>

              <div class="input-field col s12">
                <input id="lastname" type="text" class="validate" name="lastname" required>
                <label for="lastname">Prezime</label>
              </div>

              <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email" required>
                <label for="email">E-mail Adresa</label>
              </div>

              <div class="input-field col s12">
                <input id="phone_number" type="text" class="validate" name="phone_number" required>
                <label for="phone_number">Broj Mobitela</label>
              </div>

              <div class="input-field col s12">
                <input id="address" type="text" class="validate" name="address" required>
                <label for="address">Adresa</label>
              </div>

              <div class="input-field col s12">
                <input id="city" type="text" class="validate" name="city" required>
                <label for="city">Grad</label>
              </div>

              <div class="input-field col s12">
                <input id="oib" type="text" class="validate" name="oib" maxlength="11" required>
                <label for="oib">OIB</label>
              </div>

              <div class="input-field col s12">
                  <button type="submit" class="btn waves-effect waves-light indigo">Učlani se</button>
              </div>
          </form>
      </div>

      <div class="col s12 m5 l4 offset-m1 offset-l1">
        <blockquote>
          <p>Ovaj zahtjev je uvjet za članstvo u <b>QUANTi Inicijativu</b>.</p>
          <p>Svi podaci koji se ovdje podnesu bit će potpuno zaštićeni i koristit će se samo u svrhu QUANTi Inicijative.
            <br>
            Svi članovi će biti na vrijeme obaviješteni kada i gdje će se njihovi podaci koristiti te svaki član ima pravo odbiti korištenje tih podataka.
            <br>
            QUANTi Inicijativa preuzima potpunu odgovornost za podnesene podatke članova.
          </p>
          <p><b>Slanjem ovog zahtjeva prihvaćaju se svi uvjeti i pravila unutar QUANTi Inicijative.</b></p>
        </blockquote>
          <p><b style="color: red;">*</b> molimo ispunite sva polja</p>
      </div>

    </div>
  </div>
</main>
@endsection
