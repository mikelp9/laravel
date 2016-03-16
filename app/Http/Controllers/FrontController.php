<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Article;
use Request;
use View;
use Response;

class FrontController extends Controller
{
	public function index(){
		//$articles=Article::get();
		$articles = Article::paginate(5);
		if (Request::ajax()) {
			return response()->json(View::make('site.articles', array('articles' => $articles))->render());
        }
		
		return view('site.index',['articles'=>$articles]);
	}
	public function show($id){
		$article=Article::find($id);
		return view('site.show',['article'=>$article]);
	}
}