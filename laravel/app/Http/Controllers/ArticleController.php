<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // 投稿一覧
    public function index ()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
    }

    // 投稿作成
    public function create ()
    {
        return view('articles.create');
    }

    // 投稿送信
    public function store(ArticleRequest $request, Article $article)
    {
        $artivle->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }

    // 編集
    public function edit (Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }
}
