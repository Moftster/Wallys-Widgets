@extends('layout.main')

@section('content')

<div class="jumbotron">
    <h3 class="display-4">Understand the T&Cs!</h3>

    <hr class="my-4">
    
    <p class="lead">You can can order any number of widgets, but will always be given complete packs.</p>

    <p class="lead">Your order will be fulfilled according to the following rules:</p>

    <ol>
        <li class="lead">Only whole packs can be sent. Packs cannot be broken open.</li>
        <li class="lead"> Within the constraints of Rule 1 above, send out no more widgets than necessary to fulfil the order.</li>
        <li class="lead">Within the constraints of Rules 1 & 2 above, send out as few packs as possible to fulfil each order.</li>
    </ol>

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Number of Widgets Ordered</th>
            <th scope="col">Correct packs to send</th>
            <th scope="col">Incorrect solution(s)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>250 x 1</td>
            <td>500 x 1 (too many widgets)</td>
          </tr>
          <tr>
            <th>250</th>
            <td>250 x 1</td>
            <td>500 x 1 (too many widgets)</td>
          </tr>
          <tr>
            <th>251</th>
            <td>500 x 1</td>
            <td>
              <b><p>250 x 2 (too many widgets)</p></b>
              <p>This one can be confusing!</p>
            </td>
          </tr>
          <tr>
            <th>501</th>
            <td>
              500 x 1
              <br>
              250 x 1
            </td>
            <td>
              <p>1000 x 1 (too many widgets)</p>
              <p>250 x 3 (too many packs)</p>
            </td>
          </tr>
          <tr>
            <th>12,001</th>
            <td>
              5,000 x 2
              <br>
              2,000 x 1
              <br>
              250 x 1
            </td>
            <td>5,000 x 3 (too many widgets)</td>
          </tr>
        </tbody>
      </table>

    <p class="lead">Click below to start calculating how many packs of widgets will be required for your order!</p>

    <br>

    <div class="d-flex justify-content-center">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/calculate" role="button">Calculate Widgets!</a>
      </p>
    </div>

</div>

@endsection

