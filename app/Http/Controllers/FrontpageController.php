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

   public function searchfillter(Request $request){
         // dd($request->all());


      }

    public function search(Request $request)
    {
        //  dd($request->all());

        $title     = $request->title;
        $type     = $request->type;
        $purpose  = $request->purpose;
        $bedroom  = $request->bedroom;
        $bathroom = $request->bathroom;
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $minarea  = $request->minarea;
        $unit = $request->unit;
        $random_id = $request->random_id;
        $maxarea  = $request->maxarea;
        $featured = $request->featured;
        $state_id = $request->state;
        $city_id = $request->city_id;
        $socity_id = $request->socity;
        $phase_id = $request->phase;
        $block_id = $request->block;
        $sub_block_id = $request->sub_block;
        $data = Property::latest()->when($title, function ($query, $title) {
                                            return $query->where('title', '=', $title);
                                        })
                                        ->when($type, function ($query, $type) {
                                            return $query->where('type', '=', $type);
                                        })
                                        ->when($purpose, function ($query, $purpose) {
                                            return $query->where('purpose', '=', $purpose);
                                        })
                                        ->when($bedroom, function ($query, $bedroom) {
                                            return $query->where('bedroom', '=', $bedroom);
                                        })
                                        ->when($bathroom, function ($query, $bathroom) {
                                            return $query->where('bathroom', '=', $bathroom);
                                        })
                                        ->when($minprice, function ($query, $minprice) {
                                            return $query->where('price', '>=', $minprice);
                                        })
                                        ->when($maxprice, function ($query, $maxprice) {
                                            return $query->where('price', '<=', $maxprice);
                                        })
                                        ->when($minarea, function ($query, $minarea) {
                                            return $query->where('area', '>=', $minarea);
                                        })
                                        ->when($maxarea, function ($query, $maxarea) {
                                            return $query->where('area', '<=', $maxarea);
                                        })
                                        ->when($unit, function ($query, $unit) {
                                            return $query->where('unit', '<=', $unit);
                                        })
                                        ->when($state_id, function ($query, $state_id) {
                                            return $query->where('state_id', '<=', $state_id);
                                        })
                                        ->when($city_id, function ($query, $city_id) {
                                            return $query->where('city_id', '<=', $city_id);
                                        })
                                        ->when($socity_id, function ($query, $socity_id) {
                                            return $query->where('socity_id', '<=', $socity_id);
                                        })
                                        ->when($phase_id, function ($query, $phase_id) {
                                            return $query->where('phase_id', '<=', $phase_id);
                                        })
                                        ->when($block_id, function ($query, $block_id) {
                                            return $query->where('block_id', '<=', $block_id);
                                        })
                                        ->when($sub_block_id, function ($query, $sub_block_id) {
                                            return $query->where('sub_block_id', '<=', $sub_block_id);
                                        })
                                        ->when($random_id, function ($query, $random_id) {
                                            return $query->where('random_id', '<=', $random_id);
                                        })
                                        ->when($featured, function ($query, $featured) {
                                            return $query->where('featured', '=', 1);
                                        })->get();
        $orderedData = [
            'first' => [],
            'second' => [],
            'third' => [],
            'fourth' => [],
        ];
        
        // Organize the data by type
        foreach ($data as $item) {
            if ($item->superhot == 1) {
                $orderedData['first'][] = $item;
            }  elseif ($item->hot == 1) {
                $orderedData['second'][] = $item;
            } elseif ($item->featured == 1) {
                $orderedData['third'][] = $item;
            } elseif (($item->featured == 0 OR !empty($item->featured) ) AND ($item->superhot == 0 OR !empty($item->superhot)) AND ($item->hot == 0 OR !empty($item->hot == 0)) ) {
                $orderedData['fourth'][] = $item;
            }
        }
        // Save each type's data in blocks of 6
        $orderedAndChunkedData = [];
        foreach ($orderedData as $type => $data) {
            $chunkedData = array_chunk($data, 4);
            $orderedAndChunkedData[$type] = $chunkedData;
        }        
        // Merge data in the order of chunks (6 items for each type)
        $result = [];
        
        $maxChunks = max(count($orderedAndChunkedData['first']), count($orderedAndChunkedData['second']), count($orderedAndChunkedData['third']), count($orderedAndChunkedData['fourth']));
        for ($i = 0; $i < $maxChunks; $i++) {
            if (isset($orderedAndChunkedData['first'][$i])) {
                $result = array_merge($result, $orderedAndChunkedData['first'][$i]);
            }
            if (isset($orderedAndChunkedData['second'][$i])) {
                $result = array_merge($result, $orderedAndChunkedData['second'][$i]);
            }
            if (isset($orderedAndChunkedData['third'][$i])) {
                $result = array_merge($result, $orderedAndChunkedData['third'][$i]);
            }
            if (isset($orderedAndChunkedData['fourth'][$i])) {
                $result = array_merge($result, $orderedAndChunkedData['fourth'][$i]);
            }
            // Add other types or handle differently if needed
        }
        
        $combinedData = collect($result);
        $slicedData = $this->convertArrayToCollection($combinedData);
          //dd($slicedData ->all());

        return view('pages.search', compact('slicedData'));
}


    
public function convertArrayToCollection($items, $perPage = 16, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

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
