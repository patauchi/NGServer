<?php

namespace App\Http\Controllers;
use App\Models\Species;
use Illuminate\Http\Request;
use App\Http\Requests\SaveAllRequest;

class SpeciesController extends Controller
{
    //
    public function index()
    {
    	$projects = Species::get();
        return view('species.speciesIndex', compact('projects'));
    }

    public function create()
    {
    	return view('species.speciesCreate', [
    		'species' => new Species
    	]);
    }

    public function store(Species $species)
    {

    	Species::create([
    		'title'=>request('title'),
    		'description'=>request('description')
    	]);

    	return redirect()->route('species.index')->with('status', '!! Chicho, el proyecto se ha creado correctamente');
    }

    public function show(Species $species)
    {
    	return view('species.speciesShow', [
    		'species'=>$species
    	]);
    }

    public function edit(Species $species)
    {
    	return view('species.speciesEdit',[
    		'species'=>$species
    	]);
    }
    public function update(Species $species, SaveAllRequest $request)
    {
    	$species->update($request->validated());
    	return redirect()->route('species.show',$species)->with('status', 'La especie se ha actualziado correctamente');
    }
    public function destroy(Species $species)
    {
    	$species->delete();

    	return redirect()->route('species.index', $species)->with('status', 'Chicho, La especie se ha eliminado');
    }

}
