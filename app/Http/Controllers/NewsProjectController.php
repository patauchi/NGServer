<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_project;
use App\Models\News;


class NewsProjectController extends Controller
{
    //
    public function index()
    {
    	$news = News::get();
    	$newsproject = News_project::get();
        return view('newsProject.newsProjectIndex', compact('newsproject','news'));
    }



    // public function create()
    // {
    // 	return view('categories.categoriesCreate',[
    //         'newscategorie' => new News_project
    //     ]);
    // }


    //     public function store(SaveCategories $request)
    // {
    // 	News_project::create([
    // 		'name'=>request('name'),
    // 	]);

    // 	return redirect()-> route('categories.index')->with('status', '!! Chicho, la noticia se ha creado correctamente');
    // }
    //  public function show(News_project $category)
    // {
    // 	//return $category;

    // 	 return view('categories.categoriesShow',[
    // 	 	'newscategorie' => $category
    // 	 ]);

    // }

    //     public function edit(News_project $category)
    // {
    // 	return view('categories.categoriesEdit',[
    // 		'newscategorie' => $category
    // 	]);
    // }

    // public function update(News_project $category, SaveCategories $request)
    // {
    // 	$category->update($request->validated());

    // 	return redirect()->route('categories.show', $category)->with('status', 'Chicho se ha actualizado la noticia');
    // }

    // public function destroy(News_project $category)
    // {
    // 	$category -> delete();

    // 	return redirect()->route('categories.index',$category)->with('status', 'Chicho se ha eliminado la noticia');
    // }

}
