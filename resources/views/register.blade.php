@extends('common.main')
@section('title', 'Register')
@section('content')

<section class="container py-5">
  <form method="POST" action="{{  route('register.submit') }}">
    @csrf
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="glass-panel p-4 p-md-5">
          <div>
            <h2 class="text-center login-title">Register</h2>
            <p class="text-center login-subtitle">Please enter your details</p>
          </div>

          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            <ul class="mb-0">
              <li>{{ $error }}</li>
            </ul>
            @endforeach
          </div>
          @endif

          @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @elseif (session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
          @endif

          <div class="row g-3 mb-3">
            <div class="col-12 col-sm-4">
              <label for="firstName" class="form-label">
                <i class="bi bi-person"></i> First Name
              </label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name">
            </div>
            <div class="col-12 col-sm-4">
              <label for="middleName" class="form-label">
                <i class="bi bi-person-badge"></i> Middle Name
              </label>
              <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle name">
            </div>
            <div class="col-12 col-sm-4">
              <label for="lastName" class="form-label">
                <i class="bi bi-person-fill"></i> Last Name
              </label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-12 col-sm-6">
              <label for="contactNumber" class="form-label">
                <i class="bi bi-telephone"></i> Contact Number
              </label>
              <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="+63 912 345 6789">
            </div>
            <div class="col-12 col-sm-6">
              <label for="emailAddress" class="form-label">
                <i class="bi bi-envelope"></i> Email Address
              </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@email.com">
            </div>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-12">
              <label for="password" class="form-label">
                <i class="bi bi-lock"></i> Password
              </label>
              <input type="password" class="form-control" id="password" name="password" placeholder="••••••••">
            </div>
          </div>

          <div class="row g-3">
            <div class="col-12 d-flex gap-3 justify-content-end">
              <button type="cancel" class="btn-aero btn-aero-red btn-aero-cancel">
                Cancel
              </button>
              <button type="submit" class="btn-aero btn-aero-blue">
                Submit
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&family=Trebuchet+MS&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-image: url('https://preview.redd.it/first-frutiger-aero-bg-in-illustrator-v0-22moysouakqe1.png?width=3840&format=png&auto=webp&s=10fc15444b7170b8cd1f95c92d5d08e48623ff57');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-color: #a8d8ea;
    position: relative;
  }

  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background: linear-gradient(135deg,
        rgba(100, 200, 255, 0.35) 0%,
        rgba(60, 180, 120, 0.25) 40%,
        rgba(180, 240, 255, 0.3) 100%);
    z-index: 0;
  }

  .page-wrapper {
    position: relative;
    z-index: 1;
    min-height: 100vh;
    padding: 40px 20px;
  }

  /* Glassmorphism panel */
  .glass-panel {
    background: linear-gradient(160deg,
        rgba(255, 255, 255, 0.72) 0%,
        rgba(200, 240, 255, 0.55) 60%,
        rgba(160, 225, 240, 0.45) 100%);
    backdrop-filter: blur(18px) saturate(180%);
    -webkit-backdrop-filter: blur(18px) saturate(180%);
    border: 1.5px solid rgba(255, 255, 255, 0.75);
    border-radius: 20px;
    box-shadow:
      0 8px 32px rgba(60, 160, 220, 0.18),
      inset 0 1.5px 0 rgba(255, 255, 255, 0.9),
      inset 0 -1px 0 rgba(100, 200, 255, 0.2);
  }

  /* Login section */
  .login-section {
    padding: 36px 30px;
  }

  .login-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a6a9a;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
    margin-bottom: 6px;
    text-align: center;
  }

  .login-subtitle {
    font-size: 0.92rem;
    color: #2a7aaa;
    text-align: center;
    margin-bottom: 24px;
    opacity: 0.85;
  }

  .glass-input-group {
    background: rgba(255, 255, 255, 0.55);
    border: 1.5px solid rgba(100, 190, 240, 0.5);
    border-radius: 14px;
    padding: 14px 16px;
    margin-bottom: 14px;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .glass-input-group:focus-within {
    border-color: rgba(30, 140, 220, 0.7);
    box-shadow: 0 0 0 3px rgba(60, 170, 255, 0.18);
    background: rgba(255, 255, 255, 0.72);
  }

  .glass-input-group label {
    font-size: 0.75rem;
    font-weight: 600;
    color: #1a7aaa;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    display: block;
    margin-bottom: 5px;
  }

  .glass-input-group input {
    background: transparent;
    border: none;
    outline: none;
    width: 100%;
    font-size: 0.95rem;
    color: #1a4a6a;
    font-family: inherit;
  }

  .glass-input-group input::placeholder {
    color: rgba(60, 130, 180, 0.5);
  }

  .forgot-link {
    display: block;
    text-align: center;
    color: #1a7acc;
    font-size: 0.85rem;
    text-decoration: none;
    margin: 10px 0 22px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6);
  }

  .forgot-link:hover {
    color: #0d5a9e;
    text-decoration: underline;
  }

  /* Aero button */
  .btn-aero {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 50px;
    border: 1.5px solid rgba(197, 197, 197, 0.6);
    background: linear-gradient(180deg,
        rgba(255, 255, 255, 0.95) 0%,
        rgba(218, 218, 218, 0.9) 48%,
        rgba(214, 214, 214, 0.95) 50%,
        rgba(255, 255, 255, 0.85) 100%);
    color: #fff;
    font-weight: 700;
    font-size: 1rem;
    letter-spacing: 0.04em;
    cursor: pointer;
    text-shadow: 0 1px 2px rgba(193, 193, 193, 0.5);
    box-shadow:
      0 4px 14px rgba(149, 149, 149, 0.35),
      inset 0 1px 0 rgba(255, 255, 255, 0.6);
    transition: all 0.15s ease;
    position: relative;
    overflow: hidden;
  }

  .btn-aero-blue {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 50px;
    border: 1.5px solid rgba(30, 130, 220, 0.6);
    background: linear-gradient(180deg,
        rgba(160, 220, 255, 0.95) 0%,
        rgba(60, 160, 240, 0.9) 48%,
        rgba(30, 120, 220, 0.95) 50%,
        rgba(80, 190, 255, 0.85) 100%);
    color: #fff;
    font-weight: 700;
    font-size: 1rem;
    letter-spacing: 0.04em;
    cursor: pointer;
    text-shadow: 0 1px 2px rgba(0, 60, 120, 0.5);
    box-shadow:
      0 4px 14px rgba(30, 100, 200, 0.35),
      inset 0 1px 0 rgba(255, 255, 255, 0.6);
    transition: all 0.15s ease;
    position: relative;
    overflow: hidden;
  }

  .btn-aero-red {
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 50px;
    border: 1.5px solid rgba(220, 30, 122, 0.6);
    background: linear-gradient(180deg, rgba(246, 203, 238, 0.95) 0%, rgba(240, 60, 144, 0.9) 48%, rgba(220, 30, 96, 0.95) 50%, rgba(255, 93, 177, 0.85) 100%);
    color: #fff;
    font-weight: 700;
    font-size: 1rem;
    letter-spacing: 0.04em;
    cursor: pointer;
    text-shadow: 0 1px 2px rgba(120, 0, 30, 0.5);
    box-shadow:
      0 4px 14px rgba(200, 30, 30, 0.35),
      inset 0 1px 0 rgba(255, 255, 255, 0.6);
    transition: all 0.15s ease;
    position: relative;
    overflow: hidden;
  }

  .btn-aero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 10%;
    width: 80%;
    height: 48%;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.05) 100%);
    border-radius: 0 0 50% 50%;
  }

  .btn-aero:hover {
    box-shadow: 0 6px 20px rgba(198, 198, 198, 0.45), inset 0 1px 0 rgba(255, 255, 255, 0.7);
    transform: translateY(-1px);
  }

  .btn-aero:active {
    transform: translateY(0);
  }

  /* Pricing section */
  .pricing-section {
    padding: 36px 30px;
  }

  .pricing-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a5a8a;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
    margin-bottom: 10px;
  }

  .pricing-desc {
    color: #2a6a9a;
    font-size: 0.9rem;
    text-align: center;
    line-height: 1.6;
    margin-bottom: 26px;
    opacity: 0.9;
  }

  /* Image grid */
  .img-pricing {
    aspect-ratio: 16/9;
    object-fit: cover;
    border-radius: 14px;
    border: 2px solid rgba(255, 255, 255, 0.7);
    box-shadow:
      0 4px 16px rgba(30, 100, 180, 0.2),
      inset 0 1px 0 rgba(255, 255, 255, 0.6);
    transition: transform 0.2s, box-shadow 0.2s;
    display: block;
    width: 100%;
  }

  .img-pricing:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 8px 28px rgba(30, 100, 180, 0.32);
  }

  /* Compare plans table */
  .compare-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a5a8a;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
    margin: 32px 0 16px;
  }

  .glass-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background: rgba(255, 255, 255, 0.35);
    border-radius: 14px;
    overflow: hidden;
    border: 1.5px solid rgba(100, 190, 240, 0.4);
  }

  .glass-table thead tr {
    background: linear-gradient(180deg, rgba(120, 210, 255, 0.55) 0%, rgba(60, 170, 240, 0.4) 100%);
  }

  .glass-table th {
    padding: 13px 16px;
    color: #0d5080;
    font-weight: 700;
    font-size: 0.9rem;
    letter-spacing: 0.04em;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
    border-bottom: 1.5px solid rgba(100, 190, 255, 0.4);
  }

  .glass-table td {
    padding: 11px 16px;
    color: #1a4a6a;
    font-size: 0.9rem;
    border-top: 1px solid rgba(100, 190, 240, 0.25);
  }

  .glass-table tbody tr:hover {
    background: rgba(180, 230, 255, 0.25);
  }

  .check-icon {
    display: inline-block;
    width: 22px;
    height: 22px;
    background: linear-gradient(180deg, #5cd0a0 0%, #28a878 100%);
    border-radius: 50%;
    line-height: 22px;
    font-size: 12px;
    color: #fff;
    font-weight: 700;
    box-shadow: 0 2px 6px rgba(30, 160, 100, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.5);
  }

  /* Aero orb decoration */
  .orb {
    position: fixed;
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
  }

  .orb-1 {
    width: 320px;
    height: 320px;
    top: -80px;
    left: -80px;
    background: radial-gradient(circle at 35% 35%, rgba(140, 220, 255, 0.55), rgba(60, 160, 240, 0.2) 60%, transparent 80%);
  }

  .orb-2 {
    width: 260px;
    height: 260px;
    bottom: 40px;
    right: -60px;
    background: radial-gradient(circle at 40% 40%, rgba(120, 240, 200, 0.45), rgba(40, 180, 140, 0.15) 60%, transparent 80%);
  }

  .orb-3 {
    width: 180px;
    height: 180px;
    top: 45%;
    right: 15%;
    background: radial-gradient(circle at 40% 30%, rgba(200, 240, 255, 0.5), transparent 70%);
  }

  @media (max-width: 767px) {

    .login-section,
    .pricing-section {
      padding: 28px 20px;
    }

    .pricing-title,
    .login-title {
      font-size: 1.6rem;
    }

    .orb-3 {
      display: none;
    }
  }
</style>

@endsection