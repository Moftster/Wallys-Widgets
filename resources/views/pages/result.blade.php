@extends('layout.main')

@section('content')

<div class="jumbotron">

    <h1 class="display-4">Total packs required = {{ session()->get( 'numberOfPacks' ) }}!</h1>

    <p class="lead">You ordered {{session()->get( 'widgetsOrdered' ) }} Widgets and therefore required the following packs:</p>

    <ul>
      @foreach(session()->get( 'countedNumberOfPacks' ) as $key => $value)
        <li>{{$value}} x {{$key}}</li>
      @endforeach
    </ul>

    <hr class="my-4">

    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/" role="button">Calculate more Widgets!</a>
    </p>
<
/div>

@endsection