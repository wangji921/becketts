<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Photo $photo)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        // $photos = Photo::where('category_id', $category->id)->paginate(20);
        $photos = $photo->withOrder($request->order)
                        ->where('category_id', $category->id)
                        ->paginate(20);
        // 传参变量话题和分类到模板中
        return view('photos.index', compact('photos', 'category'));
    }
}
