<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    public function execute($alias){
    	if(!$alias){
    		abort(404);
    	}//If rout is nothing
    	if(view()->exists('site.page')){

    		$page = Page::where('alias',strip_tags($alias))->first(); //strip_tags удушается безапастность путем исключения добавления доп с
    		$data = [
    			'title' => $page->name,
    			'page' => $page
    		];

    		return view('site.page',$data);
    	}else{
    		abort(404);
    	}
    }
}
