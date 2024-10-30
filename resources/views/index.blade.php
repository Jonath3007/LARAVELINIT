<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASURKAP | Beranda</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cover bg-no-repeat" style="background-image: url('/aset/img/BG.jpg');">
    <nav class="bg-orange-500 flex items-center justify-between p-4 rounded-b-lg">
        <div class="flex ml-8">
            <a href="index.html">
                <img src="/aset/img/LOGO2.png" class="w-24">
            </a>
            <ul class="flex space-x-8 ml-16">
                <li>
                    <a href="#">
                        <img src="/aset/img/HOME.png" class="w-12">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/aset/img/CHART_1.png" class="w-6">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/aset/img/KORAN.png" class="w-20">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/aset/img/KONTAK.png" class="w-20">
                    </a>
                </li>
                <li class="flex items-center">
                <a href="{{ route('about') }}" class="text-white font-regular mb-4 text transform: text-3xl flex justify-center">About</a>
                </li>
                <li class="flex items-center">
                <a href="{{ route('login') }}" class="text-white font-regular mb-4 text transform: text-3xl flex justify-center">Login</a>
                </li>
            </ul>
        </div>
        <input type="text" placeholder="Search..." class="border rounded px-4 py-2 text-lg mr-8">
    </nav>

    <div class="text-center mt-16">
        <h1 class="text-5xl font-bold text-white tracking-widest">SELAMAT DATANG DI HASURKAP</h1>
        <p class="text-2xl text-white mt-2">HASIL SURVEI DAN REKAPITULASI</p>
    </div>

    <div class="flex justify-center space-x-8 mt-16">
        <div class="bg-white w-64 p-8 text-center shadow-lg">
            <img src="/aset/img/1.jpg" alt="Person1" class="w-full h-auto mb-4">
            <p class="text-lg text-gray-700">Ia mantan gubernur ibu kota dan eks Mendikbud RI. Selain itu, ia pernah menjadi jubir Paslon Jokowi-JK</p>
        </div>
        <div class="bg-white w-64 p-8 text-center shadow-lg">
            <img src="/aset/img/2.jpg" alt="Person2" class="w-full h-auto mb-4">
            <p class="text-lg text-gray-700">Beliau adalah seorang nasionalis, pernah memimpin Operasi Seroja dan pernah diberhentikan dari posisinya</p>
        </div>
        <div class="bg-white w-64 p-8 text-center shadow-lg">
            <img src="/aset/img/3.jpg" alt="Person3" class="w-full h-auto mb-4">
            <p class="text-lg text-gray-700">Mantan gubernur 2 periode berturut-turut dan aktif di media sosial untuk pelayanan publik.</p>
        </div>
    </div>
</body>
</html>
