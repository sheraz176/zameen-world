<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Feature;
use App\PropertyImageGallery;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
// use Toastr;
// use Auth;
use File;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::latest()->withCount('comments')->get();

        return view('admin.properties.index', compact('properties'));
    }


    public function create()
    {
        $features = Feature::all();

        return view('admin.properties.create', compact('features'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|unique:properties|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'type'      => 'required',
            'bedroom'   => 'required',
            'bathroom'  => 'required',
            'city'      => 'required',
            'address'   => 'required',
            'area'      => 'required',
            'image'     => 'required|image|mimes:jpeg,jpg,png',
            'floor_plan' => 'image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required',
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('property')) {
                Storage::disk('public')->makeDirectory('property');
            }
            $propertyimage = Image::make($image)->stream();
            Storage::disk('public')->put('property/' . $imagename, $propertyimage);
        }

        $floor_plan = $request->file('floor_plan');
        if (isset($floor_plan)) {
            $currentDate = Carbon::now()->toDateString();
            $imagefloorplan = 'floor-plan-' . $currentDate . '-' . uniqid() . '.' . $floor_plan->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('property')) {
                Storage::disk('public')->makeDirectory('property');
            }
            $propertyfloorplan = Image::make($floor_plan)->stream();
            Storage::disk('public')->put('property/' . $imagefloorplan, $propertyfloorplan);
        } else {
            $imagefloorplan = 'default.png';
        }

        $property = new Property();
        $property->title    = $request->title;
        $property->slug     = $slug;
        $property->price    = $request->price;
        $property->purpose  = $request->purpose;
        $property->type     = $request->type;
        $property->image    = $imagename;
        $property->bedroom  = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->city     = $request->city;
        $property->city_slug = str_slug($request->city);
        $property->address  = $request->address;
        $property->area     = $request->area;

        if (isset($request->featured)) {
            $property->featured = true;
        }

        $property->agent_id = Auth::id();
        $property->description          = $request->description;
        $property->video                = $request->video;
        $property->floor_plan           = $imagefloorplan;
        $property->location_latitude    = $request->location_latitude;
        $property->location_longitude   = $request->location_longitude;
        $property->nearby               = $request->nearby;
        $property->save();
        DB::table('properties')
            ->where('id', $property->id)
            ->update([
                'state_id' => $request->state,
                'city_id' => $request->city_id,
                'socity_id' => $request->socity,
                'phase_id' => $request->phase,
                'block_id' => $request->block,
                'sub_block_id' => $request->sub_block,
            ]);
        $property->features()->attach($request->features);


        $gallary = $request->file('gallaryimage');

        if ($gallary) {
            foreach ($gallary as $images) {
                $currentDate = Carbon::now()->toDateString();
                $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                $galimage['size'] = $images->getClientSize();
                $galimage['property_id'] = $property->id;

                if (!Storage::disk('public')->exists('property/gallery')) {
                    Storage::disk('public')->makeDirectory('property/gallery');
                }
                $propertyimage = Image::make($images)->stream();
                Storage::disk('public')->put('property/gallery/' . $galimage['name'], $propertyimage);

                $property->gallery()->create($galimage);
            }
        }

        Toastr::success('message', 'Property created successfully.');
        return redirect()->route('admin.properties.index');
    }


    public function show(Property $property)
    {
        $state = null;
        $city = null;
        $socity = null;
        $phase = null;
        $block = null;
        $sub_block = null;
        $property = Property::withCount('comments')->find($property->id);
        if (isset($property->state_id)) {
            $state = DB::table('state')->where('id', $property->state_id)->first();
        }
        if (isset($state->id)) {
            $city = DB::table('city')->where('id', $property->city_id)->first();
        }
        if (isset($city->id)) {
            $socity = DB::table('socity')->where('id', $property->socity_id)->first();
        }

        if (isset($socity)) {
            $phase = DB::table('phase')->where('id', $property->phase_id)->first();
        }
        if (isset($phase)) {
            $block = DB::table('block')->where('id', $property->block_id)->first();
        }
        if (isset($block)) {
            $sub_block = DB::table('sub_block')->where('id', $property->sub_block_id)->first();
        }
        $videoembed = $this->convertYoutube($property->video, 560, 315);

        return view('admin.properties.show', compact('property', 'videoembed', 'state', 'city', 'socity', 'phase', 'block', 'sub_block'));
    }


    public function edit(Property $property)
    {
        $state = null;
        $city = null;
        $socity = null;
        $phase = null;
        $block = null;
        $sub_block = null;
        $features = Feature::all();
        $property = Property::find($property->id);
        if (isset($property->state_id)) {
            $state = DB::table('state')->where('id', $property->state_id)->first();
        }
        if (isset($state->id)) {
            $city = DB::table('city')->where('id', $property->city_id)->first();
        }
        if (isset($city->id)) {
            $socity = DB::table('socity')->where('id', $property->socity_id)->first();
        }

        if (isset($socity)) {
            $phase = DB::table('phase')->where('id', $property->phase_id)->first();
        }
        if (isset($phase)) {
            $block = DB::table('block')->where('id', $property->block_id)->first();
        }
        if (isset($block)) {
            $sub_block = DB::table('sub_block')->where('id', $property->sub_block_id)->first();
        }
        $videoembed = $this->convertYoutube($property->video);

        return view('admin.properties.edit', compact('property', 'features', 'videoembed', 'state','city','socity','phase','block','sub_block'));
    }


    public function update(Request $request, $property)
    {
        $request->validate([
            'title'     => 'required|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'type'      => 'required',
            'bedroom'   => 'required',
            'bathroom'  => 'required',
            'city'      => 'required',
            'address'   => 'required',
            'area'      => 'required',
            'image'     => 'image|mimes:jpeg,jpg,png',
            'floor_plan' => 'image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required'
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);

        $property = Property::find($property->id);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('property')) {
                Storage::disk('public')->makeDirectory('property');
            }
            if (Storage::disk('public')->exists('property/' . $property->image)) {
                Storage::disk('public')->delete('property/' . $property->image);
            }
            $propertyimage = Image::make($image)->stream();
            Storage::disk('public')->put('property/' . $imagename, $propertyimage);
        } else {
            $imagename = $property->image;
        }


        $floor_plan = $request->file('floor_plan');
        if (isset($floor_plan)) {
            $currentDate = Carbon::now()->toDateString();
            $imagefloorplan = 'floor-plan-' . $currentDate . '-' . uniqid() . '.' . $floor_plan->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('property')) {
                Storage::disk('public')->makeDirectory('property');
            }
            if (Storage::disk('public')->exists('property/' . $property->floor_plan)) {
                Storage::disk('public')->delete('property/' . $property->floor_plan);
            }

            $propertyfloorplan = Image::make($floor_plan)->stream();
            Storage::disk('public')->put('property/' . $imagefloorplan, $propertyfloorplan);
        } else {
            $imagefloorplan = $property->floor_plan;
        }

        $property->title        = $request->title;
        $property->slug         = $slug;
        $property->price        = $request->price;
        $property->purpose      = $request->purpose;
        $property->type         = $request->type;
        $property->image        = $imagename;
        $property->bedroom      = $request->bedroom;
        $property->bathroom     = $request->bathroom;
        $property->city         = $request->city;
        $property->city_slug    = str_slug($request->city);
        $property->address      = $request->address;
        $property->area         = $request->area;

        if (isset($request->featured)) {
            $property->featured = true;
        } else {
            $property->featured = false;
        }

        $property->description  = $request->description;
        $property->video        = $request->video;
        $property->floor_plan   = $imagefloorplan;
        $property->location_latitude  = $request->location_latitude;
        $property->location_longitude = $request->location_longitude;
        $property->nearby             = $request->nearby;
        $property->save();

        $property->features()->sync($request->features);

        $gallary = $request->file('gallaryimage');
        if ($gallary) {
            foreach ($gallary as $images) {
                if (isset($images)) {
                    $currentDate = Carbon::now()->toDateString();
                    $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                    $galimage['size'] = $images->getClientSize();
                    $galimage['property_id'] = $property->id;

                    if (!Storage::disk('public')->exists('property/gallery')) {
                        Storage::disk('public')->makeDirectory('property/gallery');
                    }
                    $propertyimage = Image::make($images)->stream();
                    Storage::disk('public')->put('property/gallery/' . $galimage['name'], $propertyimage);

                    $property->gallery()->create($galimage);
                }
            }
        }
        DB::table('properties')
            ->where('id', $property->id)
            ->update([
                'state_id' => $request->state,
                'city_id' => $request->city_id,
                'socity_id' => $request->socity,
                'phase_id' => $request->phase,
                'block_id' => $request->block,
                'sub_block_id' => $request->sub_block,
            ]);

        Toastr::success('message', 'Property updated successfully.');
        return redirect()->route('admin.properties.index');
    }


    public function destroy(Property $property)
    {
        $property = Property::find($property->id);

        if (Storage::disk('public')->exists('property/' . $property->image)) {
            Storage::disk('public')->delete('property/' . $property->image);
        }
        if (Storage::disk('public')->exists('property/' . $property->floor_plan)) {
            Storage::disk('public')->delete('property/' . $property->floor_plan);
        }

        $property->delete();

        $galleries = $property->gallery;
        if ($galleries) {
            foreach ($galleries as $key => $gallery) {
                if (Storage::disk('public')->exists('property/gallery/' . $gallery->name)) {
                    Storage::disk('public')->delete('property/gallery/' . $gallery->name);
                }
                PropertyImageGallery::destroy($gallery->id);
            }
        }

        $property->features()->detach();
        $property->comments()->delete();

        Toastr::success('message', 'Property deleted successfully.');
        return back();
    }


    public function galleryImageDelete(Request $request)
    {

        $gallaryimg = PropertyImageGallery::find($request->id)->delete();

        if (Storage::disk('public')->exists('property/gallery/' . $request->image)) {
            Storage::disk('public')->delete('property/gallery/' . $request->image);
        }

        if ($request->ajax()) {

            return response()->json(['msg' => $gallaryimg]);
        }
    }

    // YOUTUBE LINK TO EMBED CODE
    private function convertYoutube($youtubelink, $w = 250, $h = 140)
    {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"$w\" height=\"$h\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>",
            $youtubelink
        );
    }
    // My Code Start
    function state_data_fun()
    {
        $data = DB::table('state')->where('country_id', '167')->get();
        return response()->json($data);
    }

    function city_data_fun($id)
    {
        $data = DB::table('city')->where('state_id', $id)->get();
        if (count($data) > 0) {

            return response()->json($data);
        }
        return response()->json("no data");
    }

    function socity_data_fun($id)
    {
        $data = DB::table('socity')->where('city_id', $id)->get();
        if (count($data) > 0) {

            return response()->json($data);
        }
        return response()->json("no data");
    }

    function phase_data_fun($id)
    {
        $data = DB::table('phase')->where('socity_id', $id)->get();
        if (count($data) > 0) {

            return response()->json($data);
        }
        return response()->json("no data");
    }

    function block_data_fun($id)
    {
        $data = DB::table('block')->where('phase_id', $id)->get();
        if (count($data) > 0) {

            return response()->json($data);
        }
        return response()->json("no data");
    }

    function sub_block_data_fun($id)
    {
        $data = DB::table('sub_block')->where('block_id', $id)->get();
        if (count($data) > 0) {

            return response()->json($data);
        }
        return response()->json("no data");
    }
    // My Code End
}
