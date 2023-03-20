<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('datatable/datatables.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 bg-slate-200 shadow-md h-screen">
                <div class="my-5">
                    <img src="https://bitmapitsolution.com/images/logo/logo.png" class="w-10/12 bg-white mx-auto py-3 rounded-lg" alt="">
                </div>

                <div class="mt-12">
                    <a href="{{route('dashboard')}}" class="block pl-4 border-b-2 border-blue-500 ml-2 text-xl py-2 hover:bg-blue-600 hover:text-white">Dashboard</a>

                    <a href="{{route('category.index')}}" class="block pl-4 border-b-2 border-blue-500 ml-2 text-xl py-2 hover:bg-blue-600 hover:text-white">Category</a>

                    <a href="" class="block pl-4 border-b-2 border-blue-500 ml-2 text-xl py-2 hover:bg-blue-600 hover:text-white">News</a>

                    
                </div>
            </div>
            <div class="flex-1 p-6">
                @yield('content')
            </div>
        </div>
    </body>
</html>
