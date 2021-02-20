@extends('layout.main')

@section('content')

<div class="jumbotron">

    <div class="d-flex justify-content-center">
      <h1 class="display-4">Total packs required = <b>{{ session()->get( 'numberOfPacks' ) }}</b></h1>
    </div>

    <br>
    
    <p class="lead">You ordered {{session()->get( 'widgetsOrdered' ) }} Widgets and therefore require the following packs:</p>

    <ul>
      @foreach(session()->get( 'countedNumberOfPacks' ) as $key => $value)
        <li class="lead">{{$value}} x {{$key}} Widget pack</li>
      @endforeach
    </ul>

    <p class="lead">Click below to start again...</p>


    <div class="text-center">
      <img class="img-fluid" src="{{ asset('images/result1.svg') }}" alt="">
    </div>

    <br><br>

    <div class="d-flex justify-content-center">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/" role="button">Calculate more Widgets!</a>
      </p>
    </div>

  </div>

@endsection