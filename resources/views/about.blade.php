<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-sky-600 flex flex-col items-center justify-center">
  <nav class="bg-orange-500 w-full py-10 shadow-lg text-yellow-50 flex justify-center">
  <ul class="flex space-x-8">
    <li><a href="{{ route('index') }}" class=" text-white font-regular text-3xl flex justify-center">Index</a></li>
    <li><a href="{{ route('login') }}" class=" text-white font-regular text-3xl flex justify-center">Login</a></li>
    <li><a href="{{ route('about') }}" class=" text-white font-regular text-3xl flex justify-center">About</a></li>
    <li></li>
  </ul>
  </nav>
    <h1 class="text-7xl font-bold text-yellow-50 p-4">
    ABOUT ME
  </h1>
    </div>
</body>
</html>