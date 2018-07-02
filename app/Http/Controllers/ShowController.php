<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Post;
use App\home_page as Home;


class ShowController extends Controller
{
    private $pages;
    private $news;
    public function __construct(){
      $this->pages = Page::all();
      $this->news = Post::orderBy('id','desc')->take(3)->get();
    }
    public function home()
    {
      $home = Home::first();
      $posts = Post::take(3)->get();

      $data = [
        'home'=>$home,
        'news'=>$this->news,
        'pages'=>$this->pages,
        'posts'=>$posts,
      ];
      return view('home',$data);
    }



  public function posts($value='')
  {

    $posts = Post::take(3)->get();
    $posts_main = Post::paginate(5);
    $data = [
      'pages'=>$this->pages,
      'news'=>$this->news,
      'main'=>$posts_main,
      'posts'=>$posts
    ];
    return view('posts',$data);
  }



  public function post(Request $request,$id)
  {
    $post = Post::find($id);
    $data = [
      'post' => $post,
      'pages' => $this->pages
    ];
    return view('post',$data);
  }

  public function gallery()
  {
    $data['pages'] = $this->pages;
    $data['posts'] = Post::select(['img','name','id'])->paginate(21);
    return view('gallery',$data);
  }

  public function aboutUs()
  {
    $data['pages'] = $this->pages;
    return view('aboutUs',$data);
  }
  public function join()
  {
    $data['pages'] = $this->pages;
    return view('join',$data);
  }
  public function actions()
  {
    $data['pages'] = $this->pages;
    return view('actions',$data);
  }


  }
