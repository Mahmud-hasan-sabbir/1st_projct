<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $categories,$image,$imageUrl,$imageName,$imageDirectory,$category;

    public static function savecategory($request)
    {
        self::$categories                = new Category();
        self::$categories->name          = $request->category_name;
        self::$categories->description   = $request->category_description;
        self::$categories->image         = self::saveImage($request);
        self::$categories->save();
    }
    public static function saveImage($request)
    {
        self::$image = $request->file('category_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'category-images/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        return self::$imageDirectory.self::$imageName;
    }
    public static function updatecategory($request , $id)
    {
        self::$category = Category::find($id);
        if ($request->file('category_image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::saveImage($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name          = $request->category_name;
        self::$category->description   = $request->category_description;
        self::$category->image         = self::$imageUrl;
        self::$category->save();
    }
    public static function deletecategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
