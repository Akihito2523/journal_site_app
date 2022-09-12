<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\journal_site_appRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(journal_site_appRequest $request)
    {
        // インスタンスの作成
        $article = new Article;
        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        // インスタンスに値を設定して保存
        $article->save();
        // 登録したらindexに戻る
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);
        return view('articles.show', ['articles' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        return view('articles.edit', ['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

    public function update(journal_site_appRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $articles = Article::find($id);

        // 値の用意
        $articles->title = $request->title;
        $articles->body = $request->body;

        // 保存
        $articles->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect('/articles');
    }
}
