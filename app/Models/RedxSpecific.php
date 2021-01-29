<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedxSpecific extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'certificate',
        'pdf',
        'slug'
      
    ];

    /** get status value */
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
     * Felete Redx Specific details
     */
    public function deleteRedxSpecific($id)
    {
        $redx_specific = RedxSpecific::find($id);
        if(file_exists($redx_specific->certificate)) {
            unlink($redx_specific->certificate);
        }
        if(file_exists($redx_specific->pdf)) {
            unlink($redx_specific->pdf);
        }
     
        $redx_specific->delete();
    }

     /**
     * Get all images of product.
     */
    public function firstRexSpecific()
    {
        return $this->where('status', 1)->first();
    }
}
