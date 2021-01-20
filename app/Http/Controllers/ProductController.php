<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    
     /** show Product list page
     * @param null
     * return view
     */
    public function showProducts()
    {
        $products = Product::all();
        return view('admin.product',['products'=> $products]);
    }

      /** show add Product page
     * @param null
     * return view
     */
    public function showAddProducts()
    {
        $category = new Category();
        return view('admin.add_product', ['category' => $category]);
    }

      /** show edit Product page
     * @param null
     * return view
     */
    public function showEditProducts($product_id)
    {
        $category = new Category();
        $product = Product::find($product_id);
    
        return view('admin.edit_product', ['category' => $category, 'product' => $product]);
    }


    
     /** show add product action
     * @param Request $request
     * return view
     */
    public function addProduct(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'product_name' => 'required|unique:products,product_name',
            'category' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'images' => 'required',
            'pdf' => 'pdf',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        $thumbnail_path = "";
        if($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('product/', $imageName);
            $thumbnail_path = 'product/' . $imageName;
          

        }

        $pdf_path = "";
        if($request->hasfile('pdf'))
        {
            $file = $request->file('pdf');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('product/', $imageName);
            $pdf_path = 'product/' . $imageName;
          

        }
        $product_name = $request->input('product_name');
        $slug = Str::slug($product_name, '-');
        $max_order = Product::max('order');
        $max_order_no = 1;
        if(!$max_order) {
            $max_order_no = $max_order+1;
        }
        $product = Product::create([
            'product_name' => $product_name,
            'category_id' => $request->input('category'),
            'product_desc' => $request->input('description'),
            'thumbnail' => $thumbnail_path,
            'slug' => $slug,
            'order' =>  $max_order_no,
            'document' =>  $pdf_path
        ]);

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {
                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('product/', $imageName);
                $image_path = 'product/' . $imageName;
                $i++;

                $product_image = ProductImage::create([
                    'product_id' => $product->id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

    /** Delete product image
     * @param null
     * return view
     */
    public function deleteProductImage($image_id)
    {
        $product = ProductImage::find($image_id);
        if(file_exists($product->image)) {
            unlink($product->image);
        }
        $product->delete();
        exit(json_encode(['status' => 200]));
    }

      /** show update product action
     * @param Request $request
     * return view
     */
    public function updateProduct(Request $request, $product_id)
    {
        $validatedData = Validator::make($request->all(),[
            'product_name' => 'required|unique:products,product_name,'.$product_id,
            'category' => 'required',
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        
        $product = Product::find($product_id);
        $thumbnail_path = $product->thumbnail;
        
        if($request->hasfile('thumbnail'))
        {
            if(file_exists($thumbnail_path)) {
                unlink($thumbnail_path);
            }
            $file = $request->file('thumbnail');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('product/', $imageName);
            $thumbnail_path = 'product/' . $imageName;
          

        }

        $pdf_path = $product->document;
        
        if($request->hasfile('pdf'))
        {
            // unlink($pdf_path);
            $file = $request->file('pdf');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('product/', $imageName);
            $pdf_path = 'product/' . $imageName;
          

        }
        $product_name = $request->input('product_name');
        $slug = Str::slug($product_name, '-');
       

        Product::where('id', $product_id)
                ->update([
                    'product_name' => $product_name,
                    'category_id' => $request->input('category'),
                    'product_desc' => $request->input('description'),
                    'thumbnail' => $thumbnail_path,
                    'slug' => $slug,
                    'status' => $request->input('status'),
                    'order' => $request->input('order_no'),
                    'document' => $pdf_path,
                ]);


        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {

                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('product/', $imageName);
                $image_path = 'product/' . $imageName;
                $i++;

                $product_image = ProductImage::create([
                    'product_id' => $product_id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

    
    /** Delete product
     * @param null
     * return view
     */
    public function deleteProduct($product_id)
    {
        $product = new Product();
        $product->deleteProduct($product_id);
        exit(json_encode(['status' => 200]));
    }

}
