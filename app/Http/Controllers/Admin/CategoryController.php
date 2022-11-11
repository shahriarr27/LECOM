<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $ValidatedData = $request->validated();

        $category = new Category;
        $category->name = $ValidatedData['name'];
        $category->slug = Str::slug($ValidatedData['slug']);
        $category->description = $ValidatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/categories/',$filename);
            $category->image = $filename;
        }

        $category->meta_title = $ValidatedData['meta_title'];
        $category->meta_keyword = $ValidatedData['meta_keyword'];
        $category->meta_description = $ValidatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }

    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category){
        $ValidatedData = $request->validated();

        $category = Category::findOrFail($category);
        $category->name = $ValidatedData['name'];
        $category->slug = Str::slug($ValidatedData['slug']);
        $category->description = $ValidatedData['description'];

        if($request->hasFile('image')){

            $path = 'uploads/categories/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/categories/',$filename);
            $category->image = $filename;
        }

        $category->meta_title = $ValidatedData['meta_title'];
        $category->meta_keyword = $ValidatedData['meta_keyword'];
        $category->meta_description = $ValidatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->save();

        return redirect('admin/category')->with('message', 'Category Updated Successfully');
    }
}
