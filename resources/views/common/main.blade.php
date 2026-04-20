<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <link href="frutiger.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body>
  <div class="container-fluid">
    @include('common.header')
    <div class="my-3">
      @yield('content')
    </div>
    @include('common.footer')
  </div>
</body>

</html>