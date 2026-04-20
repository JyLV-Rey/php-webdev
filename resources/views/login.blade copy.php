@extends('common.main')
@section('title', 'Login')
@section('content')
<div class="row g-3 p-5">

  <!-- Left Login Section -->
  <section class="col-12 col-sm-10 col-md-4 col-lg-3 container-fluid ">
    <h2 class="display-4 display-sm-3 text-center"><i class="bi bi-box-arrow-in-right"></i> Login</h2>
    <p class="lead">Please enter your credentials</p>
    <div class="border mb-3 p-3 p-sm-4">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control p-2 p-sm-3" id="exampleFormControlInput1" placeholder="email">
    </div>
    <div class="border mb-3 p-3 p-sm-4">
      <label for="exampleFormControlInput2" class="form-label">Password</label>
      <input type="password" class="form-control p-2 p-sm-3" id="exampleFormControlInput2" placeholder="password">
    </div>
    <div class="text-center mb-4">
      <a href="xd" style="color:blue;">Forgot Password</a>
    </div>

    <div class="text-center">
      <button class="btn btn-lg btn-primary">Login</button>
    </div>
  </section>

  <!-- Right Pricing Section -->
  <section class="col-12 col-sm-12 col-md-8 col-lg-9">
    <h2 class="display-4 display-sm-3 text-center mb-3 container-fluid">Pricing</h2>
    <p class="text-center ">
      Pricing is the process whereby a business sets and displays the price at which it will sell its products and services and may be part of the business s marketing plan. In setting prices, the business will take into account the price at which it could acquire the goods, the manufacturing cost, the marketplace, competition, market condition, brand, and quality of the product. </p>

    <!-- Image Grid Responsive: 1 col mobile, 2 col sm, 3 col md+ -->
    <div class="row g-2 mb-5 center container-fluid justify-content-center">
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/static.vecteezy.com/79340c0d4e3b72de8e9611c3c7eb8b56bef99c39.jpg" class="img-fluid w-100 rounded img-pricing " alt="Pricing 1">
      </div>
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/static.vecteezy.com/7206d1622322582b696547e586d2386f38e150e3.jpg" class="img-fluid w-100 rounded img-pricing " alt="Pricing 2">
      </div>
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/img.freepik.com/5d0e5d1ebc52182effe806ef5c3b3b1d92c7d896.jpg" class="img-fluid w-100 rounded img-pricing " alt="Pricing 3">
      </div>
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/static.vecteezy.com/09be338550706c422c21cae87b99cfaa16f0d21f.jpg" class="img-fluid w-100 rounded img-pricing " alt="Pricing 4">
      </div>
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/static.vecteezy.com/8f45595733ea346685e4920daec7cc950dd6ed1f.jpg" class="img-fluid w-100 rounded img-pricing " alt="Pricing 5">
      </div>
      <div class="col-lg-4 col-sm-6 col-md-5">
        <img src="https://kimi-web-img.moonshot.cn/img/img.pikbest.com/3404e788b5d3897c2d3ec481279028261b4f5240.jpg!w700wp" class="img-fluid w-100 rounded img-pricing  " alt="Pricing 6">
      </div>
    </div>

    <!-- Compare Plans Table -->
    <h5 class="text-center mb-3 display-4 display-sm-3">Compare Plans</h5>
    <div class="table-responsive">
      <table class="table table-borderless text-center table-sm">
        <thead>
          <tr>
            <th class="text-start"></th>
            <th class="">Free</th>
            <th class="">Pro</th>
            <th class="">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-top: 2px solid #dee2e6;">
            <td class="text-start">Public</td>
            <td>&#10003;</td>
            <td>&#10003;</td>
            <td>&#10003;</td>
          </tr>
          <tr style="border-top: 1px solid #dee2e6;">
            <td class="text-start">Private</td>
            <td></td>
            <td>&#10003;</td>
            <td>&#10003;</td>
          </tr>
          <tr style="border-top: 1px solid #dee2e6;">
            <td class="text-start">Permissions</td>
            <td></td>
            <td></td>
            <td>&#10003;</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>

<style>
  .img-pricing {
    aspect-ratio: 16/9;
    object-fit: cover;
  }

  /* Custom responsive button width */
  @media (max-width: 575.98px) {
    .btn-sm-w-100 {
      width: 100% !important;
    }
  }

  @media (min-width: 576px) {
    .btn-md-w-auto {
      width: auto !important;
    }
  }
</style>
@endsection