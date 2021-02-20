@extends('layout.main')

@section('content')

<div class="jumbotron">

    <h1 class="display-4">Welcome to Wally's Widgets Calculator!</h1>

    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    
    <hr class="my-4">

    <p class="lead">Click below to start calculating how many packs of widgets will be required for your order!</p>

    <div class="d-flex justify-content-center">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/overview" role="button">Let's get started!</a>
      </p>
    </div>

</div>

@endsection

