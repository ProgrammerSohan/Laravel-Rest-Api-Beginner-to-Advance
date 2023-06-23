<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function getBlog($id)
     {
        $blog = Blog::find($id);
        return $blog;

     }
}
