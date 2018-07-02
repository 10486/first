<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;
use Session;

class SearchController extends Controller
{

  public function search(Request $request)
  {
    if(isset($request->all()['keywords']))
    {
      $keywords = explode(" ", $request->all()['keywords']);
      Session::put('keywords',$keywords);
    }else{
      $keywords = Session::get('keywords');
    }
      $posts = new Post();
      $posts = $posts->where(function ($query) use($keywords){
        foreach ($keywords as  $keyword) {
          $word = '%'.$keyword.'%';
          $query->orWhere('name','LIKE',$word)
                ->orWhere('text','LIKE',$word)
                ->orWhere('head','LIKE',$word);
      }
    })->paginate(5);

    $pages = Page::all();
    $data = [
      'news'=>Post::orderBy('id','desc')->take(3)->get(),
      'main'=>$posts,
      'pages'=>$pages,
    ];
    return view('posts',$data);
  }
}
