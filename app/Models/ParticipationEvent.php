<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationEvent extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name',
        'event_desc',
        'thumbnail',
        'slug'
  
    ];

      /**
     * Get all images of project.
     */
    public function eventImages()
    {
        return $this->hasMany(ParticipationEventImage::class, 'event_id', 'id');
    }


    /**
     * Get all images of project.
     */
    public function deleteEvent($event_id)
    {
        $event = ParticipationEvent::find($event_id);
        if(file_exists($event->thumbnail)) {
            unlink($event->thumbnail);
        }
     
        foreach($event->eventImages as $image) {
            if(file_exists($image->image)) {
                unlink($image->image);
            }
            $image->delete();
        }
        $event->delete();
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
    public function firstEvent()
    {
        return $this->where('status', 1)->first();
    }
}
