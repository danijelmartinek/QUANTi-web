@extends('layouts.app')



@section('content')

    <div class="container">

        <div class="row">

            <div class="col s12 m6 l6" style="margin-top: 50px; margin-bottom: 50px;">

                <h5>Kontaktirajte nas</h5>

                <div class="divider"></div>

                <br>

                @if(session()->has('message'))

                  <div class="alert-success">

                    <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

                    {{ session()->get('message') }}

                  </div>

                @endif

                <form action="{{ url('contact') }}" method="POST" class="contact">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label name="subject">Ime i prezime:</label>

                        @if ($errors->has('name'))

                            <span class="red-text">

                                <strong>Molimo unesite ime i prezime.</strong>

                            </span>

                        @endif

                        <input id="name" name="name" class="form-control">

                    </div>

                    <div class="form-group">

                        <label name="email">Email:</label>

                        @if ($errors->has('email'))

                            <span class="red-text">

                                <strong>Molimo unesite email adresu.</strong>

                            </span>

                        @endif

                        <input id="email" name="email" class="form-control">

                    </div>



                    <div class="form-group">

                        <label name="message">Sadržaj:</label>

                        @if ($errors->has('message'))

                            <span class="red-text">

                                <strong>Molimo unesite poruku.</strong>

                            </span>

                        @endif

                        <textarea id="message" name="message" class="height: 200px;"></textarea>

                    </div>



                    <input type="submit" value="Pošalji" class="btn btn-success">

                </form>

            </div>

            <div class="col s1 m1 l1">

              <div class="vdivider center"></div>

            </div>

            <br><br>



            <div class="col s11 m5 l5" style="margin-top: 50px; margin-bottom: 50px;">

                <span><b>Inicijativa QUANTi</b></span><br><br>

                <span><b>E-mail:</b> <a href="mailto:info@quanti.com.hr">info@quanti.com.hr</a></span><br><br>

                <span><b>Adresa:</b> Franje Tuđmana 20, Križevci, Hrvatska <br> (RCTP Križevci)</span><br><br>



                <ul class="collapsible z-depth-0" data-collapsible="accordion">

                  <li>

                    <div class="collapsible-header"><i class="fa fa-angle-down" aria-hidden="true"></i> Kontakt Osobe</div>

                    <div class="collapsible-body">

                      <div>

                        <p><b>Danijel Martinek</b></p>

                        <div class="divider"></div>

                        <table>

                          <tr>

                            <td class="center">

                              <b><i class="fa fa-envelope-o" aria-hidden="true"></i></b><br>

                              <b><i class="fa fa-mobile" aria-hidden="true"></i></b>

                            </td>

                            <td>

                              <span class="center"><a href="mailto:danijel.martinek.4@gmail.com">danijel.martinek.4@gmail.com</a><span><br>

                              <span class="center">+385 99 820 5291<span>

                            </td>

                          </tr>

                        </table>

                      </div>

                      <br>



                      <div>

                        <p><b>Denis Martin Budinski</b></p>

                        <div class="divider"></div>

                        <table>

                          <tr>

                            <td class="center">

                              <b><i class="fa fa-envelope-o" aria-hidden="true"></i></b><br>

                              <b><i class="fa fa-mobile" aria-hidden="true"></i></b>

                            </td>

                            <td>

                              <span class="center"><a href="mailto:dbudinski01@gmail.com">dbudinski01@gmail.com</a><span><br>

                              <span class="center">+385 91 602 3085<span>

                            </td>

                          </tr>

                        </table>

                      </div>

                      <br>


                      <div>

                        <p><b>Neven Jakopčić</b></p>

                        <div class="divider"></div>

                        <table>

                          <tr>

                            <td class="center">

                              <b><i class="fa fa-envelope-o" aria-hidden="true"></i></b><br>

                              <b><i class="fa fa-mobile" aria-hidden="true"></i></b>

                            </td>

                            <td>

                              <span class="center"><a href="mailto:nevenjakopcic@gmail.com">nevenjakopcic@gmail.com</a><span><br>

                              <span class="center">+385 91 959 5708<span>

                            </td>

                          </tr>

                        </table>

                      </div>

                      <br>



                    </div>

                  </li>

                </ul>

            </div>



            <div class="col s11 m5 l5 divider"></div>

            <div class="col s11 m5 l5">

              <br><br>

              <p>Postani članom naše inicijative! </p>

              <div class="center"  onclick="location.href='{{ url('/membership/register') }}';"><a class="waves-effect waves-light btn indigo">UČLANI SE</a></div>

            </div>

        </div>

    </div>



@endsection


