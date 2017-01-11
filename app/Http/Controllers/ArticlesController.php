<?php

namespace Codecourse\Http\Controllers;

use Codecourse\Article;

use Codecourse\Http\Requests;

use Codecourse\Http\Requests\ArticleRequest;

use Illuminate\Http\Request;

use Codecourse\Http\Controllers\Controller;

use Carbon\Carbon;

use Auth;


class ArticlesController extends Controller
{
    public function __construct(){

        # Middleware can check auth we can use 'only' or 'except' in controller
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index(){

    	# $articles = Article::all();
        $articles = Article::latest('published_at')->Published()->get();

    	#return $articles; # Return Json
    	return view('articles.index', compact('articles'));
    }

    public function show($id){

    	$article = Article::findOrFail($id);

        # dd($article->published_at);
        # return $article;
    	return view('articles.show', compact('article'));
    }

    public function create(){

        if (Auth::guest()) {
            return redirect('articles');
        }

    	return view('articles.create');
    }

    public function store(ArticleRequest $request){

        # Validation
        # can use defaults validation "store(Request $request)" and then type
        # $this->validate($request, ['title' => 'required|min:3', 'body' => 'required']);

        # $input['published_at'] = Carbon::now(); # we config published_at in model 

        # Ex. 1
        # $input = $request->all();
        # $input['user_id'] = Auth::user()->id;
        # Article::create($input);

        # Ex. 2
        $article = new Article($request->all()); # create new article with attribute from the form 

        Auth::user()->articles()->save($article); # get auth user article and save new one pass to article obj
        
        return redirect('articles');
    }

    public function edit($id){

        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));

    }

    public function update($id, ArticleRequest $request){

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');

    }
}
