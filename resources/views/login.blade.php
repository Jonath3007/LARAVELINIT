<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-500 to-blue-700">
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
    <script src="/public/aset/js/script.js"></script>
    <div class="mt-6">
    <a href="{{ route('index') }}" class="text-white font-bold mb-4 text transform: uppercase text-3xl flex justify-center">Index</a>
    </div>
</body>
</html>