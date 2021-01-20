<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name',
        'parent_id',
        'category_desc',
        'image',
        'slug',
        
    ];

    public function activeCategories()
    {
        return $this->where('status', 1)->get();
    }

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
     * Get all images of product.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    
     /**
     * Get all images of product.
     */
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

}
