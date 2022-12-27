<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static $blogs,$image,$imageUrl,$imageName,$imageDirectory,$blog;

    public static function storeBlog($request)
    {
        self::$blogs                           = new Blog();
        self::$blogs->category_id             = $request->category_id;
        self::$blogs->title                    = $request->category_name;
        self::$blogs->short_description         = $request->short_description;
        self::$blogs->long_description         = $request->Long_description;
        self::$blogs->image                   = self::saveImage($request);
        self::$blogs->save();
    }
    public static function saveImage($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'blog-images/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        return self::$imageDirectory.self::$imageName;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateBlog($request , $id)
    {
        self::$blog                          = Blog::find($id);
        if ($request->file('blog_image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::saveImage($request);
        }else{
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->title                  = $request->blog_name;
        self::$blog->short_description       =$request->short_description;
        self::$blog->long_description        =$request->Long_description;
        self::$blog->image                   = self::$imageUrl;
        self::$blog->save();

    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }

}
