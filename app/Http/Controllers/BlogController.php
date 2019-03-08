<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;    

class BlogController extends Controller
{
    private $blog;
    public function construct(Blog $blog)
    {
       $this->blog = $blog;
    }
    public function index()
    {
       
        
    }

    public function create()
    {
       return view('create');
    }

    public function store(Request $request)
    {
   
        Blog::create(request(['title','description']));

         
        return redirect()->action('BlogController@show');
    }

      public function blogsDetails($id)
      {
         
         $blogs=Blog::find($id);

          $commen = Comment::select('email','name','comment')->where('blog_id', $id)->orderBy('id','desc')->get()->toArray();
          return view('blogdetails',compact('blogs','commen'));
      }
    
    public function show()
    {
         $blogs=Blog::orderBy('id','desc')->get();

        
        return view('home',compact('blogs'));
    }

   
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
       
    }
}
