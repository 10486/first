<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Post;
use App\Page;

class AdminPostController extends Controller
{
    public function add(Request $request)
    {
      if ($request->isMethod('get')) {
        $pages = Page::all();
        $admin = Admin::all();
        $data = [
          'pages'=>$pages,
          'admin'=>$admin,
        ];
        return view('admin.addPost',$data);
      }


      $data = $request->all();
      $file = $request->file('img');
      $last =Post::orderBy('id', 'desc')->first();
      $imgName = (is_object($last) ? $last->id + 1 : 1) .'_image.jpg';
      $file->move(public_path().'/images',$imgName);
      $page = Post::create([

          'name'=>$data['name'],
          'head'=>$data['head'],
          'text'=>$data['text'],
          'img'=>asset("/images/$imgName"),

      ]);
      if($page){
      return redirect()->route('add')->with(['state'=>'Пост добавлен']);
      }
      return redirect()->route('add')->with(['state'=>'Произошла ошибка']);
    }
    public function edit(Request $request,$id)
    {
      $post = Post::find($id)->first();
      if ($request->isMethod('get')) {
        $pages = Page::all();
        $admin = Admin::all();
        $data = [
          'pages'=>$pages,
          'post'=>$post,
          'admin'=>$admin,
        ];
        return view('admin.edit_post',$data);
      }
      $data = $request->all();
      $file = $request->file('img');
      if(is_object($file)){
        $imgName = $id.'_image.jpg';
        $file->move(public_path().'/images',$imgName);
        $path = "/images/$imgName";
      }
      $post->update([
        'name'=>$data['name'],
        'head'=>$data['head'],
        'text'=>$data['text'],
        'img'=>isset($path)?asset($path):$post->img,
      ]);
      return redirect()->route('edit',$id);
    }



    public function delete(Request $request,$id)
    {
      if ($request->isMethod('get')) {
        $post['post'] = Post::find($id)->first();
        $post['pages'] = Page::all();
        $post['admin'] = Admin::all();
        return view('admin.sure',$post);
      }
      Post::destroy($id);
      return redirect()->route('adminPosts');

    }
}
