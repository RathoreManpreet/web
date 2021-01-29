<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\RedxSpecific;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\ParticipationEvent;
class HomeController extends Controller
{
    /** show home page
     * @param null
     * return view
     */
    public function home()
    {
        return view('index1');
    }
    /** show service page
     * @param null
     * return view
     */
    public function service()
    {
        $category_obj = new Category();
        $page = Page::where('page_name', 'service')->first();
        return view('service', ['category_obj' => $category_obj, 'page' => $page]);
    }

     /** show about page
     * @param null
     * return view
     */
    public function about()
    {
        $page = Page::where('page_name', 'about')->first();
        return view('about', ['page' => $page]);
    }

    /** show contact page
     * @param null
     * return view
     */

     public function career()
     {
         return view('career');
     }

     public function director()
     {
         return view('director');
     }

     public function gallery()
     {
         $galleries = Gallery::all();
         $category_obj = new Category();
         return view('gallery', ['galleries' => $galleries, 'category_obj' => $category_obj]);
     }

    public function contact()
    {
        return view('contact');
    }
    
    public function location()
    {
        return view('location');
    }

    public function goc()
    {
        return view('company');
    }
    /** show redx-specific page
     * @param null
     * return view
     */
    public function redxSpecific($slug = null)
    {
        $redx_specific = RedxSpecific::where('slug', $slug)->first();
        $redx_specifics = RedxSpecific::all(); 
        return view('redx-specific',['redx_specifics' => $redx_specifics, 'redx_specific' => $redx_specific]);
    }

    /** show quality page
     * @param null
     * return view
     */
    public function quality()
    {
        $category_obj = new Category();
        $page = Page::where('page_name', 'quality')->first();
        return view('quality', ['category_obj' => $category_obj, 'page' => $page]);
    }
    
    /** show project page
     * @param $project_name
     * return view
     */
    public function project($project_slug=null)
    {
        if($project_slug == null){
            $projects = Project::where('status', 1)->get();
            return view('project', ['projects' => $projects]);
        }
        else {
            $project = Project::where('slug', $project_slug)->first();

           
            return view('project_desc', ['project' => $project]);
            
        }
    }

      /** show product page
     * @param $product_name
     * return view
     */
    public function product($category_slug=null, $product_slug=null)
    {
        
        $category_obj = new Category();
        $products = Product::all();
        $category = "";
        if($category_slug != null) {
            
           $category = Category::where('slug', $category_slug)->first();
           $products =$category->products;

        }
        if($product_slug != null) {
            $product = Product::where('slug', $product_slug)->first();
            return view('product_desc', ['category_obj' => $category_obj, 'product' => $product, 'category' => $category]);
           
        }
        else {
            return view('product',['category_obj' => $category_obj, 'products' => $products, 'category' => $category]);

        }
    }

   /** show enquiry page
     * return view
     */
    public function enquiry()
    {
        $category_obj = new Category();
        return view('enquiry', ['category_obj' => $category_obj]);
    }

    public function participation($slug = null)
    {
        $event = ParticipationEvent::where('slug', $slug)->first();
        $events = ParticipationEvent::where('status',1)->get(); 
        return view('event', ['event'=> $event, 'events' => $events]);
    }
    
  
}
