<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RedxSpecific;
use Illuminate\Support\Str;
class RedxSpecificController extends Controller
{

     /** show all redx specific page
     * @param null
     * return view
     */
    public function showRedxSpecific()
    {
        $redx_specifics = RedxSpecific::all();
        return view('admin.redx_specific',['redx_specifics' => $redx_specifics]);
    }
     /** show add redx specific page
     * @param null
     * return view
     */
    public function showAddRedxSpecific()
    {
        return view('admin.add_redx_specific');
    }

       /** show edit redx specific page
     * @param null
     * return view
     */
    public function showEditRedxSpecific($id)
    {
        
        $redx_specific = RedxSpecific::find($id);
    
        return view('admin.edit_redx_specific', ['redx_specific' => $redx_specific]);
    }

    
     /** show add redx-spcific action
     * @param Request $request
     * return view
     */
    public function addRedxSpecific(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|unique:redx_specifics,title',
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        $image_path = "";
        if($request->hasfile('certificate'))
        {
            $file = $request->file('certificate');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('redx-specific/', $imageName);
            $image_path = 'redx-specific/' . $imageName;
          

        }

        $pdf_path = "";
        if($request->hasfile('pdf'))
        {
            $file = $request->file('pdf');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('redx-specific/', $imageName);
            $pdf_path = 'redx-specific/' . $imageName;
          

        }
        $title = $request->input('title');
        $slug = Str::slug($title, '-');
      
        $redx_specific = RedxSpecific::create([
            'title' => $title,
            'description' => $request->input('description'),
            'slug' => $slug,
            'pdf' =>  $pdf_path,
            'certificate' =>  $image_path
        ]);

       
        
        exit(json_encode(['status' => 200]));
    }


     /** Delete product image
     * @param null
     * return view
     */
    public function deleteRedexSpecific($id)
    {
        $redx_specific = RedxSpecific::find($id);
        $redx_specific->deleteRedxSpecific($id);
        exit(json_encode(['status' => 200]));
    }


       /** show update product action
     * @param Request $request
     * return view
     */
    public function updateRedexSpecific(Request $request, $id)
    {
     
        $validatedData = Validator::make($request->all(),[
            'title' => 'required|unique:redx_specifics,title,'.$id,
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        
        $redx_specific = RedxSpecific::find($id);
        $certificate_path = $redx_specific->certificate;
        
        if($request->hasfile('certificate'))
        {
            if(file_exists($certificate_path)) {
                unlink($certificate_path);
            }
            $file = $request->file('certificate');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('redx-specific/', $imageName);
            $certificate_path = 'redx-specific/' . $imageName;
          

        }

        $pdf_path = $redx_specific->pdf;
        
        if($request->hasfile('pdf'))
        {
            // unlink($pdf_path);
            $file = $request->file('pdf');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('redx-specific/', $imageName);
            $pdf_path = 'redx-specific/' . $imageName;
          

        }
        $title = $request->input('title');
        $slug = Str::slug($title, '-');
       

        RedxSpecific::where('id', $id)
                ->update([
                    'title' => $title,
                    'description' => $request->input('description'),
                    'certificate' => $certificate_path,
                    'slug' => $slug,
                    'status' => $request->input('status'),
                    'pdf' => $pdf_path,
                ]);


        
        exit(json_encode(['status' => 200]));
    }

}
