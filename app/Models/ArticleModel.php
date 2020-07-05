<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {

  public static function get(){
    $articles = DB::table('article')->get();
    return $articles;
  }
  public static function get_one($id){
    $article = DB::table('article')->find($id);
    return $article;
  }
  public static function get_one_by_slug($slug){
    $article = DB::table('article')->where('slug', '=' ,$slug)->first();
    return $article;
  }

  public static function create($data){
    $new_article = DB::table('article')->insert($data);
    return $new_article;
  }

  public static function update($data,$articleId){
    $updated_article = DB::table('article')
              ->where('id', $articleId)
              ->update($data);
    return $updated_article;
  }

  public static function delete($articleId) {
    $deletedArticle = DB::table('article')->where('id', '=', $articleId)->delete();
    return $deletedArticle;
  }

}
