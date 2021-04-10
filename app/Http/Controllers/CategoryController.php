<?php

namespace App\Http\Controllers;
use App\Models\Newscategorie;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCategories;


class CategoryController extends Controller
{
    //
    public function index()
    {
    	$newscategorie = Newscategorie::get();
        return view('categories.categoriesIndex', compact('newscategorie'));
    }

    public function create()
    {
    	return view('categories.categoriesCreate',[
            'newscategorie' => new Newscategorie
        ]);
    }


        public function store(SaveCategories $request)
    {
    	Newscategorie::create([
    		'name'=>request('name'),
    	]);

    	return redirect()-> route('categories.index')->with('status', '!! Chicho, la noticia se ha creado correctamente');
    }
     public function show(Newscategorie $category)
    {
    	//return $category;

    	 return view('categories.categoriesShow',[
    	 	'newscategorie' => $category
    	 ]);

    }

        public function edit(Newscategorie $category)
    {
    	return view('categories.categoriesEdit',[
    		'newscategorie' => $category
    	]);
    }

    public function update(Newscategorie $category, SaveCategories $request)
    {
    	$category->update($request->validated());

    	return redirect()->route('categories.show', $category)->with('status', 'Chicho se ha actualizado la noticia');
    }

    public function destroy(Newscategorie $category)
    {
    	$category -> delete();

    	return redirect()->route('categories.index',$category)->with('status', 'Chicho se ha eliminado la noticia');
    }

}
