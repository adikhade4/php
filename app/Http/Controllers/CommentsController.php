<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Comment;


class CommentsController extends Controller
{
   
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

   
    public function store(Blog $blog)
    {


        $blog->addComments(
            $blog->id,
            request('name'),
            request('email'),
            request('comments')
            );
        
       
         
        return back();
    }

   
    public function show($id)
    {   
       
        $blogs=Blog::find($id);

         $commen = Comment::where('blog_id', $id)->orderBy('id','desc')->get()->toArray();
         return view('blogdetails',compact('blogs','commen'));
        // $blogs=Blog::find($id);

        // return view('blogdetails',compact('blogs'));
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function comment($blog_id, Request $request)
    {
        dd($blog_id);
       
    }
}
