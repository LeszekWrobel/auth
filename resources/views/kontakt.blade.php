@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kontakt</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                      	<article>
                      	<h1>Pracownia Sukien Ślubnych: </h1>
                      	</article>
                      	<aside>
                      	<big>CATHERINE</big> 31-216 Kraków  ul. Frycza Modrzewskiego 2<br /> <br/>tel. 12 416 55 80<br />
                      	<a href="mailto:biuro@suknieslubne.net.pl" style="color:#FFFFFF">  biuro@suknieslubne.net.pl</a><br /><br />
                      	<!--<span style="color: red; "><b><big>Przerwa urlopowa<br /> 28.07 do 07.08.2018r</big></b></span><br /><br /> -->
                      	 <a href="https://maps.google.pl/maps?ie=UTF8&amp;cid=13018454242146076063&amp;q=CATHERINE+-+Suknie+%C5%9Alubne&amp;gl=PL&amp;hl=pl&amp;t=m&amp;ll=50.087148,19.946687&amp;spn=0.004819,0.009141&amp;z=16&amp;source=embed"
                      	target="blanc" style="color:#FFFFFF;text-align:left"><img src="http://www.suknieslubne.net.pl/pl/_files/_img/mapa.jpg" width="85%" alt="mapa Kraków Catherine"/><br />
                      	<small>Wyświetl większą mapę</small></a>
                      	<br/><br />
                      	Zapraszamy do salonu od poniedziałku do piątku<br />
                      	<b>11.00 do 14.00 i 15.30 do 18.00</b><br/>
                      	w sobotę <br />dla wcześniej umówionych<br />
                      	<b>10.00 do 13.00</b><br/>
                      	<small>lub innych dogodnych uzgodnionych telefonicznie</small><br /><br />

                      	<!--informacja telefoniczna i rezerwacja terminów:<br />
                      	9.00 - 21.00<br />-->
                      	<b>tel. 12 416 55 80</b><br/>
                      	<br />
                      	NIP: PL 676-142-33-03   Regon: 121240130 <br /><br />
                      	ING Bank Śląski S.A. 84 1050 1445 1000 0091 4006 4966
                      	<br />
                      	Kod BIC / SWIFT: INGBPLPW
                      	</aside>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
