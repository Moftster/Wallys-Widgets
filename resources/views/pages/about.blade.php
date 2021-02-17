@extends('layout.main')

@section('content')

<h1>About</h1>

<p>Wally’s Widget Company is a widget wholesaler. They sell widgets in a variety of pack sizes:</p>

<ul>
    <li>250 widgets</li>
    <li>500 widgets</li>
    <li>1,000 widgets</li>
    <li>2,000 widgets</li>
    <li>5,000 widgets</li>
</ul>

<p>Their customers can order any number of widgets, but they will always be given complete packs.</p>

<p>The company wants to be able to fulfil all orders according to the following rules:</p>

<ol>
    <li>Only whole packs can be sent. Packs cannot be broken open.</li>
    <li> Within the constraints of Rule 1 above, send out no more widgets than necessary to fulfil the order.</li>
    <li>Within the constraints of Rules 1 & 2 above, send out as few packs as possible to fulfil each order.</li>
</ol>

@endsection