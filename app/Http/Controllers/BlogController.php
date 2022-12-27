<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $categories,$blogs,$blog;
    public function addblog()
    {
        $this->categories = Category::all();
        return view('front.Blog.add-blog',[
            'categories'=>$this->categories
        ]);
    }
    public function storeblog(Request $request)
    {
        Blog::storeBlog($request);
        return redirect()->back()->with('message','add blog info successfully');
    }
    public function manageblog()
    {
        $this->blogs = Blog::all();
        return view('front.Blog.manage',[
            'blogs'=>$this->blogs
        ]);
    }
    public function editblog($id)
    {
        $this->blog = Blog::find($id);

        return view('front.Blog.edit',[
            'blog'=>$this->blog,
        ]);
    }
    public function updateblog(Request $request , $id)
    {

        Blog::updateBlog($request , $id);
        return redirect('/manage-blog')->with('message','update info successfully');

    }
    public function deleteblog($id)
    {
       Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message','delete info successfully');
    }
}
