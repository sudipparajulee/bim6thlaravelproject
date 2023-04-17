<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'news_date' => 'required',
            'description' => 'required',
            'photopath' => 'required|mimes:png,jpg',
        ]);

        if($request->file('photopath'))
        {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time().'_'.$filename;
            $file->move(public_path('/images/news/'),$photopath);
            $data['photopath'] = $photopath;
        }

        News::create($data);
        return redirect(route('news.index'))->with('success','News Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('news.edit',compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
