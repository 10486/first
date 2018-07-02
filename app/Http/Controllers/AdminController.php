<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\home_page as Home;
use App\Page;
use App\Admin;
use App\Post;

class AdminController extends Controller
{
  public function index(Request $request)
  {
    $home = Home::first();
    if ($request->isMethod('get')) {
      $pages = Page::all();
      $news = Post::orderBy('id','desc')->take(3)->get();
      $posts = Post::take(3)->get();
      $admin = Admin::all();
      $data = [
        'posts'=>$posts,
        'news'=>$news,
        'pages'=>$pages,
        'home'=>$home,
        'admin'=>$admin,
    ];
      return view('admin.home',$data);
    }
    $data = $request->all();
    $file = $request->file('img');
    if(is_object($file)){
      $imgName = 'home_image.jpg';
      $file->move(public_path().'/images',$imgName);
      $path = "/images/$imgName";
    }
    $home->update([
      'name'=>$data['name'],
      'head'=>$data['head'],
      'text'=>$data['text'],
      'img'=>isset($path)?asset($path):$home->img,
    ]);
    return redirect()->back();
  }
  public function posts()
  {
    $pages = Page::all();
    $posts = Post::take(3)->get();
    $posts_main = Post::paginate(5);
    $news = Post::orderBy('id','desc')->take(3)->get();
    $admin = Admin::all();
    $data = [
      'pages'=>$pages,
      'news'=>$news,
      'main'=>$posts_main,
      'posts'=>$posts,
      'admin'=>$admin,
    ];
    return view('posts',$data);
  }
}
