<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex-col items-center justify-center bg-gradient-to-b from-blue-500 to-blue-700">
<nav class="bg-orange-500 w-full py-10 shadow-lg text-yellow-50 flex justify-center top-0">
  <ul class="flex space-x-8">
    <li><a href="{{ route('index') }}" class=" text-white font-regular text-3xl flex justify-center">Index</a></li>
    <li><a href="{{ route('login') }}" class=" text-white font-regular text-3xl flex justify-center">Login</a></li>
    <li><a href="{{ route('about') }}" class=" text-white font-regular text-3xl flex justify-center">About</a></li>
    <li></li>
  </ul>
  </nav>
  <div class="flex justify-center min-h-screen items-center">
    <div class="bg-black rounded-2xl p-8 shadow-2xl w-80">
        <form class="space-y-6">
            <div class="space-y-2">
                <label for="username" class="block text-white font-semibold">Username :</label>
                <input type="text" id="username" class="w-full px-3 py-2 rounded bg-white" required>
            </div>
            
            <div class="space-y-2">
                <label for="password" class="block text-white font-semibold">Password :</label>
                <input type="password" id="password" class="w-full px-3 py-2 rounded bg-white" required>
            </div>
                
            <button type="submit" class="w-24 mx-auto block bg-gray-200 hover:bg-white text-black font-semibold py-1 px-4 rounded">
                LOGIN
            </button>
        </form>
    </div>
    </div>
    <script src="/public/aset/js/script.js"></script>
</body>
</html>