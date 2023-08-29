<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
		return view('news.index', compact('news'));
    }

    public function customisenews()
    {
        $news = News::latest()->get();
		return view('news.customisenews', compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            'news_id' => request('news_id'),
            'news_date' => request('news_date'),
            'news_title' => request('news_title'),
            'news_details' => request('news_details'),
            'status' => request('status')
        ]);
        return redirect()->route('news.customisenews');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->news_date = request('news_date');
        $news->news_title = request('news_title');
        $news->news_details = request('news_details');
        $news->status = request('status');
        $news->save();
        return redirect()->route('news.customisenews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function delete(News $news)
    {
        return view('news.delete', compact('news'));
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.customisenews');
    }
}
