<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    //
    public function create(){

        // create new article page
        return view('articles.create');
    }
    public function store(Request $request){
        // store new articles
        $judul = $request['judul'];
        $isi = $request['isi'];
        $tag = $request['tag'];
        $slug = $request['slug'];
        $authorId = 1;
        $timestamp = date('Y-m-d H:i:s');


        $data = [
            'judul' => $judul,
            'isi' => $isi,
            'tag' => $tag,
            'slug' => $slug,
            'author_id' => $authorId,
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ];

        $articles = ArticleModel::create($data);

        return Redirect::to('articles');
    }

    public function index(){
        // get all articles
        $articles = ArticleModel::get();

        return view('articles.index', compact('articles'));
    }

    public function show($slug){
        $article = ArticleModel::get_one_by_slug($slug);
        return view('articles.single', compact('article'));
    }   

    public function edit(Request $request, $id){
        $article = ArticleModel::get_one($id);
        return view('articles.update', compact('article'));
    }

    public function update(Request $request, $id){
        $judul = $request['judul'];
        $isi = $request['isi'];
        $tag = $request['tag'];
        $slug = $request['slug'];
        $authorId = 1;
        $timestamp = date('Y-m-d H:i:s');

        $data = [
            'judul' => $judul,
            'isi' => $isi,
            'tag' => $tag,
            'slug' => $slug,
            'author_id' => $authorId,
            'updated_at' => $timestamp
        ];

        $article = ArticleModel::update($data);
        return Redirect::to('articles.index');
    }

    public function destroy($id){
        
        $deletedArticel = ArticleModel::delete($id);
        return Redirect::to('articles.index');
    }

}
