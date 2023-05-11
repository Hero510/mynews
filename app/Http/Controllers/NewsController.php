<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');
        
        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
        
    }
    
    public function show(Request $request, $id)
    {
        $posts = News::find($id);
        
        return view('news.show',  ['posts' => $posts]);
    }

    
    public function store(Request $request)
    {
        // ニュースを保存する
        $news = new News();
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->save();
    
        // ニュースサーチを保存する
        $search = new NewsSearch();
        $search->news_id = $news->id;
        $search->title = $news->title;
        $search->content = $news->content;
        $search->save();
    
        return view('news.search', ['news' => $news]);
    }
    
    public function search(Request $request)
    {
        // dd($request);
        // $news = News::all();
        $keyword = $request->input('keyword');
        // dd($keyword);
        // $news = News::where('title', $keyword)->get();
        
        
        $news = News::whereHas('search', function ($query) use ($keyword) {
        $query->where('title', '=', $keyword);
        })->get();
        
        return view('news.search', ['news' => $news]);
        
    }
    
}

