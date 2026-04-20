@extends('common.main')
@section('title', 'Calculate Results')
@section('content')
<div class="container">
  <!-- Left Section -->
  <section class="container-fluid col-lg-3 border">
    <!-- Calculate Results section -->
    <section class="background-calc container mb-8">
      <h2 class="display-4">Calculate Results</h2>
      <p class="lead">Results of calculations</p>
      <div class="">
        @foreach($results as $operation => $result)
        <p>
          <strong>{{ $operation }}:</strong>
          {{ $result }}
        </p>
        @endforeach
      </div>
    </section>

    <!-- Login section -->
    <section class="container-fluid background-login">
      <h2 class="display-4">Login</h2>
      <p class="lead">Please enter your credentials</p>
      <div class="border mb-3 p-4">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control p-3" id="exampleFormControlInput1" placeholder="email">
      </div>
      <div class="border mb-3 p-4">
        <label for="exampleFormControlInput2" class="form-label">Password</label>
        <input type="password" class="form-control p-3" id="exampleFormControlInput2" placeholder="password">
      </div>
    </section>
  </section>

  <!-- Right Section -->
  <section class="container-fluid col-lg-8 border">
    <div class="row">
      @for($i = 0; $i < 3; $i++)
        <div class="card col-lg-4 border" style="width: 15rem;">
        <img src="https://i.namu.wiki/i/ZQS5OnT8m-qQ7O2_DDVeYzrnVcJFRtvRKHsa3oxrwKIQj0035TBHD6pEXUPvEM0N53tlR9adiNN6gs8dxTzxtA.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endfor
</div>
<div class="row gap-5">
  @for($i = 0; $i < 12; $i++)
    <div class="card col-md-6 border" style="width: 12rem;">
    <img src="https://i.namu.wiki/i/ZQS5OnT8m-qQ7O2_DDVeYzrnVcJFRtvRKHsa3oxrwKIQj0035TBHD6pEXUPvEM0N53tlR9adiNN6gs8dxTzxtA.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: red;">My {{ $i+1 }} card</h5>
      <p class="card-text bg-danger text-white">Lorem.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endfor
</div>
</section>

<style>
</style>
</div>
@endsection