<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(6);
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // compact('slug'), jika keynya ingin sama dengan variablenya
        return view('article.single', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        // dd($article);
        $request->validate([
            'title' => 'required|max:255',
            'subject' => 'required',
        ]);

        Article::create($request->all());
        return redirect('/article')->with('status', 'article telah ditambahkan');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // dd($article);
        $request->validate([
            'title' => 'required|max:255',
            'subject' => 'required',
        ]);

        Article::where('id', $article['id'])
            ->update([
                'title' => $request['title'],
                'subject' => $request['subject']
            ]);
        return redirect('/article')->with('status', 'article telah diedit');
    }

    public function destroy(Article $article)
    {
        Article::destroy($article['id']);
        return redirect('/article')->with('status', 'article telah dihapus');
    }
}
