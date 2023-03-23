@extends('layouts.app')
@section('content')
@include('layouts.message')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Categories</h2>

    <div class="my-4 text-right">
        <a href="{{route('category.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Category</a>
    </div>
    <table id="example" class="display"> 
        <thead>
            <th>Order</th>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
           
            <tr>
                <td>{{$category->priority}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a href="" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1">Delete</a>
                </td>
            </tr>
            @endforeach

           
        </tbody>
    </table>


    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
@endsection