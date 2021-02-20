@extends('layout.main')

@section('content')

<div class="jumbotron">

    <h1 class="display-4">Welcome to Wally's Widget Calculator!</h1>

    <hr class="my-4">

    <p class="lead">Wally's Widget Company is a Widget wholesaler. This application will enable you to caculate how many packets  you require based on the number of widgets in your order.</p>
    
    <p class="lead">Click below to start calculating how many packs of widgets will be required for your order!</p>

    <hr class="my-4">

    <div class="text-center">
      <img class="img-fluid" src="{{ asset('images/home-5.svg') }}" alt="">
    </div>

    <br><br>

    <div class="d-flex justify-content-center">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/overview" role="button">Let's get started!</a>
      </p>
    </div>

</div>

@endsection

