<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\SaveAllRequest;


class NewsController extends Controller
{
    public function index()
    {
    	$news = News::get();
        return view('news.newsIndex', compact('news'));
    }
    public function create()
    {
    	return view('news.newsCreate',[
            'news' => new News
        ]);

    }

    public function store(SaveAllRequest $request)
    {
    	news::create([
    		'title'=>request('title'),
    		'description'=>request('description')
    	]);

    	return redirect()-> route('news.index')->with('status', '!! Chicho, la noticia se ha creado correctamente');
    }

    public function show(News $news)
    {
    	return view('news.newsShow',[
    		'news' => $news
    	]);
    }

    public function edit(News $news)
    {
    	return view('news.newsEdit',[
    		'news' => $news
    	]);
    }

    public function update(News $news, SaveAllRequest $request)
    {
    	$news->update($request->validated());

    	return redirect()->route('news.show', $news)->with('status', 'Chicho se ha actualizado la noticia');
    }

    public function destroy(News $news)
    {
    	$news -> delete();

    	return redirect()->route('news.index',$news)->with('status', 'Chicho se ha eliminado la noticia');
    }


}