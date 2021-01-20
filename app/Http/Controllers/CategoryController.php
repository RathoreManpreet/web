<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /** show category list page
     * @param null
     * return view
     */
    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.category',['categories'=>$categories]);
    }

     /** show add category page
     * @param null
     * return view
     */
    public function showAddCategory()
    {
        $category = new Category();
        return view('admin.add_category',['category'=>$category]);
    }

     /** show add category action
     * @param Request $request
     * return view
     */
    public function addCategory(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'category_name' => 'required|unique:categories,category_name',
            'parent_category' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        $image_path = "";
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            // move the file to desired folder
        
            $file->move('category/', $imageName);
            $image_path = 'category/' . $imageName;
          

        }
        $category_name = $request->input('category_name');
        $slug = Str::slug($category_name, '-');
        $category = Category::create([
            'category_name' => $category_name,
            'parent_id' => $request->input('parent_category'),
            'category_desc' => $request->input('description'),
            'image' => $image_path,
            'slug' => $slug
        ]);
        
        exit(json_encode(['status' => 200]));
    }

          /** show edit Product page
     * @param null
     * return view
     */
    public function showEditCategory($category_id)
    {
        $category = Category::find($category_id);
    
        return view('admin.edit_category', ['category' => $category]);
    }

     /** show add category action
     * @param Request $request
     * return view
     */
    public function updateCategory(Request $request, $category_id)
    {
        $validatedData = Validator::make($request->all(),[
            'category_name' => 'required|unique:categories,category_name,'.$category_id,
            'parent_category' => 'required',
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        $category = Category::find($category_id);
        $image_path = $category->image;
        if($request->hasfile('image'))
        {
            unlink($image_path);
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('category/', $imageName);
            $image_path = 'category/' . $imageName;
          

        }

        $category_name = $request->input('category_name');
        $slug = Str::slug($category_name, '-');
        Category::where('id', $category_id)
        ->update([
            'category_name' => $request->input('category_name'),
            'parent_id' => $request->input('parent_category'),
            'category_desc' => $request->input('description'),
            'image' => $image_path,
            'status' => $request->input('status'),
            'slug' => $slug
        ]);

        
        exit(json_encode(['status' => 200]));

    }


}
