<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="grid grid-cols-2">
        <img src="https://img.freepik.com/free-vector/sign-page-abstract-concept-illustration_335657-2242.jpg?w=2000" class="h-screen w-full object-cover" alt="">
   

        <div class="bg-gray-100 flex items-center justify-center">
            <form action="{{route('login')}}" method="POST" class="w-9/12 -mt-16 text-center">
                @csrf
                <img src="https://bitmapitsolution.com/images/logo/logo.png" class="h-32 mx-auto" alt="">
                <h2>Welcome to </h2>
                <input type="email" name="email" class="border-0 block w-8/12 mx-auto my-2 p-2 rounded-lg" placeholder="Enter Email" >
                <input type="password" name="password" class="border-0 block w-8/12 mx-auto my-2 p-2 rounded-lg" placeholder="Enter Password" >
                <input type="submit" value="Login" class="bg-blue-600 text-white px-10 py-2 rounded-lg cursor-pointer">
            </form>
        </div>
    </div>
</body>
</html> 