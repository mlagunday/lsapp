<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    protected $layout = 'layout.main';

    public function index(){

        $title = 'Home Page';

        return View::make('layout.header'). 
               View::make('layout.nav').
               View::make('pages.index')->with('title', $title).
               View::make('layout.footer');
    }

    public function about(){
        $title = 'About Us';

        return View::make('layout.header'). 
               View::make('layout.nav').
               View::make('pages.about')->with('title', $title).
               View::make('layout.footer');
    }

    public function services(){
        $title = 'Services';
        $data = array(
            'title' => 'Services',
            'services' => array(
                    'Documentation' => 'https://laravel.com/docs',
                    'Laracasts' => 'https://laracasts.com',
                    'News' => 'https://laravel-news.com',
                    'Forge' => 'https://forge.laravel.com',
                    'Github' => 'https://github.com/laravel/laravel'
                )     
            );

        return view('pages.services')->with($data);

        /* return View::make('layout.header'). 
               //View::make('layout.nav').
               View::make('pages.services')->with($data).
               View::make('layout.footer') */;
    }
}
