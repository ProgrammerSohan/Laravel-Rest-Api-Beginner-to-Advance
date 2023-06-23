<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function getBlog($id=null)
     {

        if($id){
            $blog = Blog::find($id);
        }else {
            $blog = Blog::all();
        }

        return $blog;

     }

     public function addBlog(Request $request)
     {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->details = $request->details;
        $result =$blog->save();
        if($result){
            return ["result" => "Blog saved"];
        }else {
            return ["result" => "Blog not saved"];
        }

     }

     public function updateBlog(Request $request)
     {
        $blog = Blog::find($request->id);
        $blog->title = $request->title;
        $blog->details = $request->details;
        $result = $blog->save();
        if($result){
            return ["result"=>"Blog Updated"];
        }else {
            return ["result"=>"Blog Not Updated"];
        }

     }

     public function deleteBlog($id)
     {
        $blog = Blog::find($id);
        $result = $blog->delete();
        if($result){
            return ["result"=>"Blog Deleted"];
        }else {
            return ["result"=>"Blog Not Deleted"];
        }

     }



}
