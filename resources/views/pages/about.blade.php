@extends('layout.main')

@section('content')

<div class="jumbotron">

    <h3 class="display-4">About Wally's Widgets</h3>

    <hr class="my-4">

    <p class="lead">Wally’s Widget Company is a widget wholesaler. We sell widgets in a variety of pack sizes:</p>

    <ul>
        <li class="lead">250 widgets</li>
        <li class="lead">500 widgets</li>
        <li class="lead">1,000 widgets</li>
        <li class="lead">2,000 widgets</li>
        <li class="lead">5,000 widgets</li>
    </ul>

    <p class="lead">Our customers can order any number of widgets, but they will always be given complete packs.</p>

    <p class="lead">Our company wants to be able to fulfil all orders according to the following rules:</p>

    <ol>
        <li class="lead">Only whole packs can be sent. Packs cannot be broken open.</li>
        <li class="lead">Within the constraints of Rule 1 above, send out no more widgets than necessary to fulfil the order.</li>
        <li class="lead">Within the constraints of Rules 1 & 2 above, send out as few packs as possible to fulfil each order.</li>
    </ol>

</div>

@endsection