@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Categories</h2>

    <table id="example" class="display"> 
        <thead>
            <th>Order</th>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sports</td>
                <td>Edit Delete</td>
            </tr>
        </tbody>
    </table>


    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
@endsection