@extends('layout.main')

@section('content')

<div class="jumbotron">

    <h1 class="display-4">Total packs required = <b>{{ session()->get( 'numberOfPacks' ) }}</b>!</h1>

    <p class="lead">You ordered {{session()->get( 'widgetsOrdered' ) }} Widgets and therefore require the following packs:</p>

    <ul>
      @foreach(session()->get( 'countedNumberOfPacks' ) as $key => $value)
        <li class="lead">{{$value}} x {{$key}}</li>
      @endforeach
    </ul>

    <hr class="my-4">

    <div class="d-flex justify-content-center">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/" role="button">Calculate more Widgets!</a>
      </p>
    </div>

  </div>

@endsection