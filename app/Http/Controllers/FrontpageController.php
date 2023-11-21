<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Property;
use App\Service;
use App\Slider;
use App\Post;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class FrontpageController extends Controller
{
    
    public function index()
    {
        // $sliders        = Slider::latest()->get();
        // $services       = Service::orderBy('service_order')->get();
        // $testimonials   = Testimonial::latest()->get();
        // $posts          = Post::latest()->where('status',1)->take(6)->get();
        $superhot     = Property::latest()->where('superhot',1)->with('rating')->withCount('comments')->take(6)->get();
        $hot     = Property::latest()->where('hot',1)->with('rating')->withCount('comments')->take(6)->get();
        $featured     = Property::latest()->where('featured',1)->with('rating')->withCount('comments')->take(6)->get();


        return view('frontend.index', compact('superhot','hot','featured'));
    }


    // public function search(Request $request)
    // {
    //     $city     = strtolower($request->city);
    //     $type     = $request->type;
    //     $purpose  = $request->purpose;
    //     $bedroom  = $request->bedroom;
    //     $bathroom = $request->bathroom;
    //     $minprice = $request->minprice;
    //     $maxprice = $request->maxprice;
    //     $minarea  = $request->minarea;
    //     $maxarea  = $request->maxarea;
    //     $featured = $request->featured;

    //     $properties = Property::latest()->withCount('comments')
    //                             ->when($city, function ($query, $city) {
    //                                 return $query->where('city', '=', $city);
    //                             })
    //                             ->when($type, function ($query, $type) {
    //                                 return $query->where('type', '=', $type);
    //                             })
    //                             ->when($purpose, function ($query, $purpose) {
    //                                 return $query->where('purpose', '=', $purpose);
    //                             })
    //                             ->when($bedroom, function ($query, $bedroom) {
    //                                 return $query->where('bedroom', '=', $bedroom);
    //                             })
    //                             ->when($bathroom, function ($query, $bathroom) {
    //                                 return $query->where('bathroom', '=', $bathroom);
    //                             })
    //                             ->when($minprice, function ($query, $minprice) {
    //                                 return $query->where('price', '>=', $minprice);
    //                             })
    //                             ->when($maxprice, function ($query, $maxprice) {
    //                                 return $query->where('price', '<=', $maxprice);
    //                             })
    //                             ->when($minarea, function ($query, $minarea) {
    //                                 return $query->where('area', '>=', $minarea);
    //                             })
    //                             ->when($maxarea, function ($query, $maxarea) {
    //                                 return $query->where('area', '<=', $maxarea);
    //                             })
    //                             ->when($featured, function ($query, $featured) {
    //                                 return $query->where('featured', '=', 1);
    //                             })
    //                             ->paginate(10); 

    //     return view('pages.search', compact('properties'));
    // }

   

    public function search()
    {
         // Retrieve two featured posts
   

         $featuredPosts = Property::where('featured', true)->take(2)->get();
         $normalPosts = Property::where('featured', false)->take(2)->get();
         
         $mergedPosts = $featuredPosts->merge($normalPosts);
         
         $currentPage = LengthAwarePaginator::resolveCurrentPage();
         $perPage = 4;
         
         // Paginate the merged collection directly
         $currentPageItems = $mergedPosts->forPage($currentPage, $perPage)->values();
         
         $paginatedMergedItems = new LengthAwarePaginator(
             $currentPageItems,
             $mergedPosts->count(),
             $perPage,
             $currentPage,
             ['path' => LengthAwarePaginator::resolveCurrentPath()]
         );
        //  dd($paginatedMergedItems);
        return view('pages.search', compact('paginatedMergedItems'));
    }
    
    
// Function to merge paginated results
private function mergePaginatedResults($featured, $normal)
{
    $merged = new Collection();

    $featured->each(function ($item) use ($merged) {
        $merged->push($item);
    });

    $normal->each(function ($item) use ($merged) {
        $merged->push($item);
    });

    // Manually create a paginator for the merged collection
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 4; // Total number of items per page (2 featured + 2 normal)
    $currentPageItems = $merged->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $paginated = new LengthAwarePaginator($currentPageItems, $merged->count(), $perPage);

    return $paginated->withPath(request()->getBasePath());
}




}
