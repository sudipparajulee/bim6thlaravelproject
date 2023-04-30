@extends('layouts.app')
@section('content')
@include('layouts.message')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">News</h2>

    <div class="my-4 text-right">
        <a href="{{route('news.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add News</a>
    </div>
    <table id="example" class="display"> 
        <thead>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
            <th>Picture for displaying in news</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($news as $news)
           
            <tr>
                <td>{{$news->news_date}}</td>
                <td>{{$news->title}}</td>
                <td><div class="h-24 overflow-auto">{{$news->description}}</div></td>
                <td><img class="w-full" src="{{asset('images/news/'.$news->photopath)}}" alt=""></td>
                <td>{{$news->category->name}}</td>
                <td>
                    <a href="{{route('news.edit',$news->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a onclick="showDelete('{{$news->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
                </td>
            </tr>
            @endforeach

           
        </tbody>
    </table>


    <div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
        <div class="flex h-full justify-center items-center">
            <div class="bg-white p-10 rounded-lg">
                <p class="font-bold text-2xl">Are you sure to delete?</p>
                <form action="{{route('news.delete')}}" method="POST">
                    @csrf
                    <input type="hidden" id="dataid" name="dataid" value="">
                    
                    <div class="flex mt-10 justify-center">
                        <input type="submit" value="Yes! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                        <a onclick="hideDelete()" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
    $('#example').DataTable({
        columnDefs: [
            { width: 150, targets: 3 },
            { width: 350, targets: 2 }
        ],
    });
});
    </script>

    <script>
        function showDelete(id)
        {
            $('#deletebox').removeClass('hidden');
            $('#dataid').val(id);
        }

        function hideDelete()
        {
            $('#deletebox').addClass('hidden');
        }
    </script>
@endsection