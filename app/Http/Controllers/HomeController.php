<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{

	/**
	 *
	 */
    public function home()
    {
    	$page = (object) [
			'layout' => 'layouts.default',
			'title'  => 'Inicio',
			'author' => 'Luis Rojas',
			'description' => 'Toda tu escuela en un solo lugar',
			'content' => 'pages.home'
		];
		
		return view('start', compact('page'));
    }

    /**
     *
     */
    public function download()
    {
    	$page = (object) [
			'layout' => 'layouts.default',
			'title'  => 'Inicio',
			'author' => 'Luis Rojas',
			'description' => 'Toda tu escuela en un solo lugar',
			'content' => 'pages.download'
		];
		
		$docs = Doc::all();

		return view('start', compact('page', 'docs'));
    }

    /**
     *
     */
    public function upload()
    {
    	$page = (object) [
			'layout' => 'layouts.default',
			'title'  => 'Inicio',
			'author' => 'Luis Rojas',
			'description' => 'Toda tu escuela en un solo lugar',
			'content' => 'pages.upload'
		];
		
		return view('start', compact('page'));
    }

    /**
     *
     */
    public function signIn()
    {
    	$page = (object) [
			'layout' => 'layouts.default',
			'title'  => 'Inicio',
			'author' => 'Luis Rojas',
			'description' => 'Toda tu escuela en un solo lugar'
		];
		
		return view('start', compact('page'));
    }

    /**
     *
     */
    public function signUp()
    {
    	$page = (object) [
			'layout' => 'layouts.default',
			'title'  => 'Inicio',
			'author' => 'Luis Rojas',
			'description' => 'Toda tu escuela en un solo lugar'
		];
		
		return view('start', compact('page'));
    }

    /**
     *
     */
    public function store(Request $request)
    {

    	$doc = $request->file('upload_doc');

    	$newDoc = new Doc();

    	$newDoc->name = $doc->getClientOriginalName();

    	$newDoc->save();

        Storage::disk('docs')->put($newDoc->name, file_get_contents($doc->getRealPath()));

    	return redirect('download');
    }

}
