@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Create New News</h2>

    <form action="{{route('gallery.store')}}" method="POST" class="my-10" enctype="multipart/form-data">
        @csrf

        <select class="w-full p-2 rounded-lg mt-2" name="category_id" id="">
            <option value="">Category 1</option>
            <option value="">Category 2</option>
            <option value="">Category 3</option>
        </select>

        <input type="text" class="w-full p-2 rounded-lg mt-2" name="title" placeholder="Enter title" value="{{old('title')}}">
        @error('title')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <input type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="{{old('description')}}">
        @error('description')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        

        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <div class="mt-2">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
            <a href="{{route('gallery.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
        </div>
    </form>

@endsection