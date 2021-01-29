<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParticipationEvent;
use App\Models\ParticipationEventImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class EventController extends Controller
{
    
      /** show event page
     * @param null
     * return view
     */
    public function showEvents()
    {
        $events = ParticipationEvent::all();
        return view('admin.event',['events' => $events]);
    }

      /** show add event page
     * @param null
     * return view
     */
    public function showAddEvent()
    {
        return view('admin.add_event');
    }

      /** show add event action
     * @param Request $request
     * return view
     */
    public function addEvent(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'event_name' => 'required|unique:participation_events,event_name',
            'description' => 'required',
            'thumbnail' => 'required',
            'images' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }

        $path = public_path().'/events';
        if(!\File::exists($path)) {
            \File::makeDirectory($path, 0777, true, true);
        }

        $thumbnail_path = "";
        if($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('events/', $imageName);
            $thumbnail_path = 'events/' . $imageName;
          

        }

        $event_name = $request->input('event_name');
        $slug = Str::slug($event_name, '-');
       
        $event = ParticipationEvent::create([
            'event_name' => $event_name,
            'event_desc' => $request->input('description'),
            'thumbnail' => $thumbnail_path,
            'slug' => $slug,
            
        ]);

        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {

                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('events/', $imageName);
                $image_path = 'events/' . $imageName;
                $i++;

                $event_image = ParticipationEventImage::create([
                    'event_id' => $event->id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }


      /** Delete event image
     * @param null
     * return view
     */
    public function deleteEventImage($image_id)
    {
        $image = ParticipationEventImage::find($image_id);
        if(file_exists($image->image)) {
            unlink($image->image);
        }
        $image->delete();
        exit(json_encode(['status' => 200]));
    }

    /** Delete event
     * @param null
     * return view
     */
    public function deleteEvent($event_id)
    {
        $event = new ParticipationEvent();
        $event->deleteEvent($event_id);
        exit(json_encode(['status' => 200]));
    }


    
      /** show edit event page
     * @param null
     * return view
     */
    public function showEditEvent($event_id)
    {
       
        $event = ParticipationEvent::find($event_id);
    
        return view('admin.edit_event', [ 'event' => $event]);
    }


       /** show update event action
     * @param Request $request
     * return view
     */
    public function updateEvent(Request $request, $event_id)
    {
        $validatedData = Validator::make($request->all(),[
            'event_name' => 'required|unique:participation_events,event_name,'.$event_id,
            'description' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }
        
        $event = ParticipationEvent::find($event_id);
        $thumbnail_path = $event->thumbnail;
        
        if($request->hasfile('thumbnail'))
        {
            if(file_exists($thumbnail_path)) {
                unlink($thumbnail_path);
            }
            $file = $request->file('thumbnail');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('events/', $imageName);
            $thumbnail_path = 'events/' . $imageName;
          

        }

        $event_name = $request->input('event_name');
        $slug = Str::slug($event_name, '-');
       

        ParticipationEvent::where('id', $event_id)
                ->update([
                    'event_name' => $event_name,
                    'event_desc' => $request->input('description'),
                    'thumbnail' => $thumbnail_path,
                    'slug' => $slug,
                    'status' => $request->input('status'),
                 
                ]);


        if($request->hasfile('images'))
         {
             $i = 0;
            foreach($request->file('images') as $file)
            {

                $imageName = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move('events/', $imageName);
                $image_path = 'events/' . $imageName;
                $i++;

                $project_image = ParticipationEventImage::create([
                    'event_id' => $event_id,
                    'image' =>  $image_path,
                ]);

            }
         }
        
        exit(json_encode(['status' => 200]));
    }


}
