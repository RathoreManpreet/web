<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name',
        'project_desc',
        'thumbnail',
        'slug',
        'order',
        'location',
        'projects',
        'materials'
    ];

    public function getStatus($status)
    {
        if ($status == 0) {
            return "Inactive";
        }
        elseif ($status == 1) {
            return "Active";
        }
    }

    /**
     * Get all images of project.
     */
    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class, 'project_id', 'id');
    }


    /**
     * Get all images of project.
     */
    public function deleteProject($project_id)
    {
        $project = Project::find($project_id);
        if(file_exists($project->thumbnail)) {
            unlink($project->thumbnail);
        }
        if(file_exists($project->document)) {
            unlink($project->document);
        }
        foreach($project->projectImages as $image) {
            if(file_exists($image->image)) {
                unlink($image->image);
            }
            $image->delete();
        }
        $project->delete();
    }


    public function relatedProjects($projects)
    {

        return $this->whereIn('id', json_decode($projects))->get();
        // $project = Project::find($project_id);
    }

}
