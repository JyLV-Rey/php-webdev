<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link href="/index.css" rel="stylesheet">
  <title>Calculate</title>
</head>

<body class="flex flex-col min-w-screen min-h-screen items-center justify-center bg-gray-950">

  <div class="container flex flex-col max-w-2xl">

    <section class="w-full max-h-full shadow-lg p-6 rounded-lg bg-gray-800 border-2 border-gray-500 mb-6">
      <h2 class="text-2xl font-bold text-gray-50 text-center mb-4">Calculate Results</h2>
      <button type="button" class="btn btn-primary">
        Notifications <span class="badge bg-secondary">4</span>
      </button>
      <div class="flex flex-wrap gap-4 justify-center">
        @foreach($results as $operation => $result)
        <div class="bg-gray-700 border text-center border-gray-600 rounded-lg p-4 shadow-md">
          <p class="text-gray-200">
            <strong class="text-gray-100 font-bold">
              {{ $operation }}:
            </strong>
            {{ $result }}
          </p>
        </div>
        @endforeach
      </div>
    </section>

    <section class="w-full shadow-lg p-8 rounded-lg bg-gray-800 border-2 border-gray-500">
      <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-gray-50 mb-2">Welcome!</h2>
        <h3 class="text-lg text-gray-200">Please enter your credentials</h3>
      </div>

      <div class="mb-3 bg-gray-600 rounded-lg p-4 border border-gray-400 flex flex-col gap-4">
        <label for="exampleFormControlInput1" class="form-label text-gray-100 font-bold">Email address</label>
        <input type="email" class="form-control bg-white rounded-lg p-3" id="exampleFormControlInput1" placeholder="email">
      </div>
      <div class="mb-3 bg-gray-600 rounded-lg p-4 border border-gray-400 flex flex-col gap-4">
        <label for="exampleFormControlInput1" class="form-label text-gray-100 font-bold">Password</label>
        <input type="password" class="form-control bg-white rounded-lg p-3" id="exampleFormControlInput1" placeholder="password">
      </div>
      <div class="flex gap-4 mt-6 w-full max-w-2xl justify-center">
        <button type="button" class="flex-1 px-4 py-2 rounded bg-red-700 text-white border-2 border-red-400 hover:bg-red-600 transition-colors">Cancel</button>
        <button type="submit" class="flex-1 px-4 py-2 rounded bg-blue-700 text-white border-2 border-blue-400 hover:bg-blue-600 transition-colors">Submit</button>
      </div>
    </section>
  </div>
</body>




</html>