<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{asset('mycss/style.css')}}"> --}}
</head>
<body>
    <nav class="bg-blue-600 text-white p-6 text-right px-24">
        <a href="/" class="font-bold text-lg px-4">Home</a>
        <a href="/about" class="font-bold text-lg px-4">About</a>
        <a href="" class="font-bold text-lg px-4">Contact</a>
        <a href="" class="font-bold text-lg px-4">Login</a>
    </nav>
    @yield('content')
    <h1>This is footer</h1>
</body>
</html>