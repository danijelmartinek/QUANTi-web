@extends('layouts.app')

@section('content')
    <div class="container" style="height: 100%;">
        <div class="row">
            @if(($member->approved) == 0 )
            <div class="col s12 m12 l12 center notapproved-card">
              <div class="card">
                 <div class="card-content">
                   <span class="card-title">PRIJAVA USPJEŠNO POSLANA!</span>
                   <p>
                     <b>Molimo pričekajte odobrenje članstva nadležnih osoba.</b><br><br>
                     <span> Obavijest o članstvu dobit ćete na vašu e-mail adresu: <i>{{ $member -> email }}</i> </span>
                   </p>
                 </div>
               </div>
            </div>
            @elseif(($member->approved) == 1 )
            <div class="col s12 m12 l12 center notapproved-card">
              <div class="card">
                 <div class="card-content">
                   <span class="card-title">DOBRO DOŠLI U <b>QUANTi</b>!</span>
                   <p>Vaš zahtjev za članstvo u QUANTi inicijativu je odobren.</p><br>
                   <p>Na linku <a href="/admin" target="_blank">Dashboard</a> možete vidjeti obavijesti, postojeće članove, pisati postove i još mnogo toga.</p><br>
                   <p>Također nam se priključite na našem <a href="https://quanti-kz.slack.com/messages/C7345GS3C/" target="_blank">Slack</a> chatu gdje raspravljamo o našoj inicijativi i o svemu vezanom uz nju.</p>
                 </div>
               </div>
            </div>
            @endif
        </div>
    </div>

@endsection
