<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;
class GalleryController extends Controller
{
      /** show galleries list page
     * @param null
     * return view
     */
    public function showGallery()
    {
        $galleries = Gallery::all();
        return view('admin.gallery',['galleries' => $galleries]);
    }

     /** show add gallery action
     * @param Request $request
     * return view
     */
    public function addGallery(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
           
            'images' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
       

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {
                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('gallery/', $imageName);
                $image_path = 'gallery/' . $imageName;
                $i++;

                $product_image = Gallery::create([
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

      /** show delete galleries
     * @param null
     * return view
     */
    public function deleteGallery(Request $request)
    {
        foreach($request->input('images') as $data)
        {
            $gallery = Gallery::find(decrypt($data));
            unlink($gallery->image);
            $gallery->delete();

        }

        exit(json_encode(['status' => 200]));

     
    }

}
