<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_name',
        'content',
      
    ];

    public function pageContent($page_id)
    {
        $page = Page::find($page_id);
        return json_decode($page->content);
    }

     /**
     * Get all images of page.
     */
    public function pageImages()
    {
        return $this->hasMany(PageImage::class, 'page_id', 'id');
    }
}
