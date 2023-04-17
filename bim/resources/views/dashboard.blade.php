@extends('layouts.app')
@section('content')
    <h2 class="text-4xl font-bold border-b-4 text-red-500 border-blue-500">Dashboard</h2>

    <div class="grid grid-cols-3 gap-8 my-6">
        <div class="p-4 flex justify-between bg-green-600 text-white rounded-lg">
            <span class="text-xl font-bold">Total News</span>
            <span class="text-5xl font-bold">{{$totalnews}}</span>
        </div>

        <div class="p-4 flex justify-between bg-blue-600 text-white rounded-lg">
            <span class="text-xl font-bold">Total Categories</span>
            <span class="text-5xl font-bold">{{$totalcategories}}</span>
        </div>

        <div class="p-4 flex justify-between bg-red-600 text-white rounded-lg">
            <span class="text-xl font-bold">Total Notices</span>
            <span class="text-5xl font-bold">{{$totalnotices}}</span>
        </div>
    </div>
@endsection