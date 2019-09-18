<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class BlogHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.home',[
            'articles' => Article::orderBy('created_at', 'desc')->where('published', 1)->paginate(10)
        ]);
    }
}
