<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'category_id',
        'product_desc',
        'thumbnail',
        'slug',
        'order',
        'pdf',
  
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
     * Get all images of product.
     */
    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

     /**
     * Get category which belong to product
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    /**
     * Get all images of product.
     */
    public function deleteProduct($product_id)
    {
        $product = Product::find($product_id);
        if(file_exists($product->thumbnail)) {
            unlink($product->thumbnail);
        }
        if(file_exists($product->document)) {
            unlink($product->document);
        }
        foreach($product->productImages as $image) {
            if(file_exists($image->image)) {
                unlink($image->image);
            }
            $image->delete();
        }
        $product->delete();
    }

}
