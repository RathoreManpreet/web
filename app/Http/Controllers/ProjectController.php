<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Support\Str;
class ProjectController extends Controller
{
     /** show projects list page
     * @param null
     * return view
     */
    public function showProjects()
    {
        $projects = Project::all();
        return view('admin.project',['projects'=> $projects]);
    }

      /** show add Project page
     * @param null
     * return view
     */
    public function showAddProjects()
    {
        $projects = Project::all();
        return view('admin.add_project', ['projects' => $projects]);
    }

      /** show edit Project page
     * @param null
     * return view
     */
    public function showEditProjects($project_id)
    {
       
        $project = Project::find($project_id);
        $projects = Project::where('id','!=',$project_id)->get();
    
        return view('admin.edit_project', [ 'project' => $project, 'projects' => $projects]);
    }


    
     /** show add poject action
     * @param Request $request
     * return view
     */
    public function addProject(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'project_name' => 'required|unique:projects,project_name',
           
            'description' => 'required',
            'thumbnail' => 'required',
            'images' => 'required',
            'location' => 'required',
            'material' => 'required',
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
            $file->move('project/', $imageName);
            $thumbnail_path = 'project/' . $imageName;
          

        }

        $project_name = $request->input('project_name');
        $slug = Str::slug($project_name, '-');
        $max_order = Project::max('order');
        $max_order_no = 1;
        if(!$max_order) {
            $max_order_no = $max_order+1;
        }
        $project = Project::create([
            'project_name' => $project_name,
            'project_desc' => $request->input('description'),
            'thumbnail' => $thumbnail_path,
            'slug' => $slug,
            'order' =>  $max_order_no,
            'location' => $request->input('location'),
            'materials' => $request->input('material'),
            'projects' => json_encode($request->input('projects')),
        ]);

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {

                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('project/', $imageName);
                $image_path = 'project/' . $imageName;
                $i++;

                $project_image = ProjectImage::create([
                    'project_id' => $project->id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

    /** Delete project image
     * @param null
     * return view
     */
    public function deleteProjectImage($image_id)
    {
        $project = ProjectImage::find($image_id);
        if(file_exists($project->image)) {
            unlink($project->image);
        }
        $project->delete();
        exit(json_encode(['status' => 200]));
    }

      /** show update project action
     * @param Request $request
     * return view
     */
    public function updateProject(Request $request, $project_id)
    {
        $validatedData = Validator::make($request->all(),[
            'project_name' => 'required|unique:projects,project_name,'.$project_id,
            'description' => 'required',
            'location' => 'required',
            'material' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        
        $project = Project::find($project_id);
        $thumbnail_path = $project->thumbnail;
        
        if($request->hasfile('thumbnail'))
        {
            if(file_exists($thumbnail_path)) {
                unlink($thumbnail_path);
            }
            $file = $request->file('thumbnail');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('project/', $imageName);
            $thumbnail_path = 'project/' . $imageName;
          

        }

        $project_name = $request->input('project_name');
        $slug = Str::slug($project_name, '-');
       

        Project::where('id', $project_id)
                ->update([
                    'project_name' => $project_name,
                    'project_desc' => $request->input('description'),
                    'thumbnail' => $thumbnail_path,
                    'slug' => $slug,
                    'status' => $request->input('status'),
                    'order' => $request->input('order_no'),
                    'location' => $request->input('location'),
                    'materials' => $request->input('material'),
                    'projects' => json_encode($request->input('projects')),
                ]);


        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {

                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('project/', $imageName);
                $image_path = 'project/' . $imageName;
                $i++;

                $project_image = ProjectImage::create([
                    'project_id' => $project_id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }

    
    /** Delete project
     * @param null
     * return view
     */
    public function deleteProject($project_id)
    {
        $project = new Project();
        $project->deleteProject($project_id);
        exit(json_encode(['status' => 200]));
    }
}
