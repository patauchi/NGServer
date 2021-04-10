<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Newscategorie;
use Illuminate\Http\Request;
use App\Http\Requests\SaveAllRequest;


class NewsController extends Controller
{

    public function __construct ()
    {
        # code...
        $this->middleware('auth')->except('index','show');

    }

    public function index()
    {
        $categories = Newscategorie::get();
    	$news = News::get();
        return view('news.newsIndex', compact('news','categories'));
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
    		'metaTitle'=>request('metaTitle'),
            'metaDescription'=>request('metaDescription'),
            'pageSlug'=>request('pageSlug'),
            'category'=>request('category'),
            'subcategory'=>request('subcategory'),
            'title'=>request('title'),
            'subtitle'=>request('subtitle'),
            'shortDescription'=>request('shortDescription'),
            'largDescription'=>request('largDescription'),
            'authorNews'=>request('authorNews'),
            'imageTitle'=>request('imageTitle'),
            'imageSlug'=>request('imageSlug'),
            'imageAuthor'=>request('imageAuthor'),
            'status'=>request('status'),
            'homeMain'=>request('homeMain'),
            'newsMain'=>request('newsMain'),
            'categorie_id'=>request('categorie_id')
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

    // public function test()
    // {
    //     $news = News::get();
    //     return view('test', compact('news'));
    // }

    public function showCategory(News $news)
    {
        return view('news.newsCategoryShow',[
            'news' => $news
        ]);
    }

}