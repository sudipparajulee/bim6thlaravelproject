@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Create New User</h2>

    <form action="{{route('user.store')}}" method="POST" class="my-10">
        @csrf
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Full Name" value="{{old('name')}}">
        @error('name')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        <input type="email" class="w-full p-2 rounded-lg mt-2" name="email" placeholder="Enter Email" value="{{old('email')}}">
        @error('email')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <input type="password" class="w-full p-2 rounded-lg mt-2" name="password" placeholder="Enter Password">
        @error('password')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <input type="password" class="w-full p-2 rounded-lg mt-2" name="password_confirmation" placeholder="Re-Enter Password">

        <select class="w-full p-2 rounded-lg mt-2" name="role">
            <option value="editor">Editor</option>
            <option value="admin">Admin</option>
        </select>
        @error('role')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <div class="mt-2">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
            <a href="{{route('category.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
        </div>
    </form>

@endsection