<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrackSync</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cyan-950 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <!-- Logo -->
        <img src="{{ asset('images/tracksync-templogo.png') }}" alt="TrackSync Logo" class="w-32 mx-auto mb-6 shadow-sm rounded-full border-stone-500">

        <!-- Introductory Paragraph -->
        <p class="text-lg text-gray-100 mb-8 max-w-4xl">
            Welcome to <span class="font-semibold text-blue-500">TrackSync</span>! With our website, you can easily track E-Jeepneys in real time. 
            No more long hours of waiting. Know exactly when your ride is near. Let’s make commuting hassle-free!
        </p>

        <!-- Buttons -->
        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}" 
               class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                Login
            </a>
            <a href="{{ route('register') }}" 
               class="px-6 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
                Sign Up
            </a>
        </div>
    </div>
</body>
</html>