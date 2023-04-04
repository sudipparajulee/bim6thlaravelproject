@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Edit Gallery</h2>

    <form action="{{route('gallery.update',$gallery->id)}}" method="POST" class="my-10" enctype="multipart/form-data">
        @csrf
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="{{$gallery->description}}">
        @error('description')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="priority" placeholder="Enter Priority" value="{{$gallery->priority}}">
        @error('priority')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <p>Current Image: </p>
        <img class="w-44" src="{{asset('images/gallery/'.$gallery->photopath)}}" alt="">

        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
            <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <div class="mt-2">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer">
            <a href="{{route('notice.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer">Exit</a>
        </div>
    </form>

@endsection