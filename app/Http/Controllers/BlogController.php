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
}
