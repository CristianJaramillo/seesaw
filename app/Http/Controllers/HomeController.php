<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
			'description' => 'Toda tu escuela en un solo lugar'
		];
		
		return view('start', compact('page'));
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
			'description' => 'Toda tu escuela en un solo lugar'
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


}
