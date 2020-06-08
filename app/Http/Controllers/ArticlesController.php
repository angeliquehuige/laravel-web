<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->paginate(5);

        return view("articles.article", ["articles" => $articles]);
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {

        return view("articles.show", ["article" => $article]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view("articles.create");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        Article::create($this->validateArticle());
        return redirect("/blog");
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {

        return view("articles.edit", compact("article"));

    }

    /**
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        return redirect("/blog/" . $article->id);

    }


    /**
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
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
            "title" => "required | min:10 | unique:articles",
            "location" => "required",
            "year" => "required | numeric ",
            "mainpic" => "required | active_url",
            "description" => "required | min:150",
            "body" => "required"
        ]);
    }
}


