@extends('layouts.app')
@section('content')
@include('layouts.message')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Notices</h2>

    <div class="my-4 text-right">
        <a href="{{route('notice.create')}}" class="bg-blue-600 text-white rounded-lg px-3 py-2">Add Notice</a>
    </div>
    <table id="example" class="display"> 
        <thead>
            <th>Order</th>
            <th>Notice</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($notices as $notice)
           
            <tr>
                <td>{{$notice->priority}}</td>
                <td>{{$notice->notice}}</td>
                <td>
                    <a href="{{route('notice.edit',$notice->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a onclick="showDelete('{{$notice->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
                </td>
            </tr>
            @endforeach

           
        </tbody>
    </table>


    <div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
        <div class="flex h-full justify-center items-center">
            <div class="bg-white p-10 rounded-lg">
                <p class="font-bold text-2xl">Are you sure to delete?</p>
                <form action="{{route('notice.delete')}}" method="POST">
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
    $('#example').DataTable();
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