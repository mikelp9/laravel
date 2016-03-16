<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticlesController extends Controller
{
    public function create()
	{
		return view('admin.articles.create');
	}
	
	public function index()
	{
		$articles=Article::all();
		return view('admin.articles.articles',['articles'=>$articles]);
	}
	
	public function store(Request $request)
	{
		$requests = $request->all();
		Article::create($requests);
		return view('admin.articles.create',['message'=>'Статья '.$requests['title'].' добавлена.']);
	}
	
	public function show()
	{
		//
	}
	
	public function edit()
	{
		//
	}
	
	public function update()
	{
		//
	}
	
	public function destroy()
	{
		//
	}
}
