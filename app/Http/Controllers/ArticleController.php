<?php

namespace App\Http\Controllers;

use App\Demo;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles=Demo::latest('updated_at')->get();
        return view('articles.index',compact('articles'));
    }

   public function show($id)
   {
      $articles=Demo::findOrFail($id);

      return view('articles.show',compact('articles'));
   }

   public function create()
   {
      return view('articles.create');
   }

   public function store()
   {
       $input=Request::all();
       $articles = new Demo();
       $articles->name=$input['title'];
       $articles->email=$input['body'];
       $articles->save();
       return redirect('articles');
   }

}
