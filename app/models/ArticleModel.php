<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {

  public static function get(){
    $articles = DB::table('articles')->get();
    return $articles;
  }
  public static function get_one($id){
    $article = DB::table('articles')->find($id);
    return $article;
  }

  public static function create($data){
    $new_article = DB::table('articles')->insert($data);
    return $new_article;
  }

  public static function update($data,$articleId){
    $updated_article = DB::table('questions')
              ->where('id', $articleId)
              ->update($data);
    return $updated_article;
  }

  public static function delete($articleId) {
    $deletedArticle = DB::table('questions')->where('id', '=', $articleId)->delete();
    return $deletedArticle;
  }

}
