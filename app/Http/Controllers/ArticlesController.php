<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::orderByDesc('created_at')->paginate(5);

        return view("articles.article", ["articles" => $articles]);
    }

    public function show(Article $article)
    {

        return view("articles.show", ["article" => $article]);
    }

    public function create()
    {

        return view("articles.create");
    }

    public function store()
    {

        Article::create($this->validateArticle());

        return redirect("/blog");
    }

    public function edit(Article $article)
    {

        return view("articles.edit", compact("article"));

    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        return redirect("/blog/" . $article->id);

    }

    public function destroy(Article $article)
    {

        $article->delete();


        return redirect("/blog");

    }

    /**
     * @return array
     */
    protected function validateArticle(): array
    {
        return request()->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required"
        ]);
    }
}


