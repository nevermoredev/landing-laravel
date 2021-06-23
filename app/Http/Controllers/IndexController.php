<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Service;
use App\People;
use Mail;
use DB;

class IndexController extends Controller
{
    //
    public function execute(Request $request){
//mail
    	 if($request->isMethod('post')){

    		$messages = [
    			'required' =>  "Поле :attribute обезательно к заполнению",
    			'email' => "Поле :attribute дожно соответствовать emal адрессу",
    		];

    		$this->validate($request,[
    			'name' => 'required | max:255' ,
    			'email' => 'required | email' ,
    			'text' => 'required'
    		],$messages);

    		$data = $request->all();

    			$result = Mail::send('site.mail',['data'=>$data],function ($message) use ($data) {
    			$mail_admin = env('MAIL_ADMIN');
    			$message->from($data['email'],$data['name']);
    			$message->to($mail_admin)->subject('Question');
    		});
    			if($result){
    				return redirect()->back()->with('error', 'Неверная пара логин пароль');
    				
    			}
    	}
//mail 
    	$pages = Page::all();
    	$portfolios = Portfolio::all();
    	$services = Service::all();
    	$peoples =People::all();
    	$tagslist = array();
    	$tags = DB::table('portfolios')->pluck('filter')->unique();
				foreach ($tags as $tag) {
					array_push($tagslist, $tag);
				}
    	$menu = array();
    	foreach ($pages as $page) {
    	$item = array('title'=>$page->name,'alias'=>$page->alias) ;
    		array_push($menu, $item);
    	}
  		$item = array('title'=>'Services','alias'=>'service') ;
    		array_push($menu, $item);
    	$item = array('title'=>'Portfolio','alias'=>'Portfolio') ;
    		array_push($menu, $item);
    	$item = array('title'=>'Team','alias'=>'team') ;
    		array_push($menu, $item);
    	$item = array('title'=>'Contact','alias'=>'contact') ;
    		array_push($menu, $item);
    	return view('site.index',array(
    		'menu'=>$menu,
    		'pages'=>$pages,
    		'services'=>$services,
    		'portfolios'=>$portfolios,
    		'peoples'=>$peoples,
    		'tagslist'=>$tagslist
    	));

    }
}
