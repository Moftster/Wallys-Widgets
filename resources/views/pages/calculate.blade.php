@extends('layout.main')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p class="text-center">{{ $error }}</p>
      @endforeach
</div>
<br />
@endif

<div class="jumbotron">

<form method="POST" action="{{url('/calculating')}}">
    @csrf
    <h3 class="display-4">Let's do the maths!</h3>

    <hr class="my-4">

    <p class="lead">Enter the number of widgets required below...</p>

    <div class="form-group">
      <input class="form-control form-control-lg" name="numberOfWidgets" id="numberOfWidgets" type="text" placeholder="E.g. 24">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>

    <div class="text-center">
      <img class="img-fluid" src="{{ asset('images/maths1.svg') }}" alt="">
    </div>

</form>

</div>

@endsection