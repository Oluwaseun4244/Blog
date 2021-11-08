<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\blogcontent;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function signup(Request $request){
        if($request->isMethod("POST")){
            $request->validate([
                "firstName"=> "required",
                "lastName"=> "required",
                "email"=> "required|unique:blogs",
            ]);
            $save_to_db = Blog::create($request->all());
            if($save_to_db){
                return back()->with("Created", "Author has been created succesfully");
                
            }
            
        }
        $allDetails = Blog::all();
        return view("signup", compact("allDetails"));
    }


    public function blogPage(){
        $blogContents = blogcontent::all();
        $authors = BLOG::all();
        return view("blogPage", compact("authors", "blogContents"));
    }

    public function createBlog(request $request){
        
        if ($request->isMethod("POST")){
            $request->validate([
                "author"=> "required",
                "title"=> "required|max:50",
                "content"=> "required|max:400:blogcontents",
            ]);

            $create = blogcontent::create($request->all());
            if ($create){
                return back()->with("Posted", "Blog has been posted successfully");
            }
        }
        $authors = BLOG::all();
        $blogContents = blogcontent::all();
        return view("createblog", compact("authors", "blogContents"));
    }
}


