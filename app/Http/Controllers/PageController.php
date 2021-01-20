<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\page;
use App\Models\PageImage;
class PageController extends Controller
{
     /** show home page
     * @param null
     * return view
     */
    public function homePage()
    {
        return view('admin.home_page');
    }


    
    /** Service page
     * @param null
     * return view
     */
    public function getPage($page)
    {
        $page_name = strtolower($page);
        $page = Page::where('page_name', $page_name)->first();
        return view('admin.'.$page_name,['page' => $page]);
    }

      /** update service
     * @param null
     * return view
     */
    public function updateService(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
      
        $data = ['title' =>  $request->input('title'),
                'description' =>  $request->input('description')];
        $page = Page::where('page_name', 'service')->first();
        if(!$page) {
            $page = Page::create([
                'page_name' => 'service',
                'content' => json_encode($data),
               
            ]);
        }
        else {
            
            Page::where('id', $page->id)
            ->update([
                'content' => json_encode($data),
            ]);
        }

        

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {
                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('page_image/', $imageName);
                $image_path = 'page_image/' . $imageName;
                $i++;

                $page_image = PageImage::create([
                    'page_id' => $page->id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

     /** Delete page image
     * @param null
     * return view
     */
    public function deletePageImage($image_id)
    {
        $page = PageImage::find($image_id);
        if(file_exists($page->image)) {
            unlink($page->image);
        }
        $page->delete();
        exit(json_encode(['status' => 200]));
    }

       /** update service
     * @param null
     * return view
     */
    public function updateQuality(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
      

        $document_path ="";
        
        if($request->hasfile('pdf'))
        {
            // unlink($pdf_path);
            $file = $request->file('pdf');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('page_image/', $imageName);
            $document_path = 'page_image/' . $imageName;
          

        }

        $data = ['title' =>  $request->input('title'),
                'description' =>  $request->input('description')];
        $page = Page::where('page_name', 'qaulity')->first();
        if(!$page) {

          

            
      
            $page = Page::create([
                'page_name' => 'quality',
                'content' => json_encode($data),
               
            ]);
        }
        else {
            if($document_path == "")
            {
                $data['pdf'] = $page->pageContent($page->id)->pdf;
            }
            else {
                $data['pdf'] = $document_path;
            }
            Page::where('id', $page->id)
            ->update([
                'content' => json_encode($data),
            ]);
        }

        

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {
                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('page_image/', $imageName);
                $image_path = 'page_image/' . $imageName;
                $i++;

                $page_image = PageImage::create([
                    'page_id' => $page->id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }


    public function updateAbout(Request $request)
    {
        $page = Page::where('page_name', 'about')->first();
        if(!$page) {
            $validatedData = Validator::make($request->all(),[
                'image' => 'required',
                'description' => 'required',
                'short_description' => 'required',
                'iso_standards' => 'required',
            ]);
        }
        else {
            $validatedData = Validator::make($request->all(),[
                'description' => 'required',
                'short_description' => 'required',
                'iso_standards' => 'required',
            ]);
        }

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
      

        $image_path ="";
        
        if($request->hasfile('image'))
        {
            // unlink($pdf_path);
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('page_image/', $imageName);
            $image_path = 'page_image/' . $imageName;
          

        }

        $data = ['image' =>  $image_path,
                'description' =>  $request->input('description'),
                'short_description' =>  $request->input('short_description'),
                'iso_standards' => $request->input('iso_standards')];
           
        $page = Page::where('page_name', 'about')->first();
        if(!$page) {


            
      
            $page = Page::create([
                'page_name' => 'about',
                'content' => json_encode($data),
               
            ]);
        }
        else {

            
            if($image_path == "")
            {
                $data['image'] = $page->pageContent($page->id)->image;
            }
            else {
                $data['image'] = $image_path;
            }
         
            Page::where('id', $page->id)
            ->update([
                'content' => json_encode($data),
            ]);
        }

        

        
        
        exit(json_encode(['status' => 200]));
    }

}
