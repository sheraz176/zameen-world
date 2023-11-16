<?php

namespace App\Http\Controllers\agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Packages;

class packageController extends Controller
{
    public function feature(Request $request){
        
        if($request->featured=='1'){
       $property = Property::find($request->property_id);
       $property->featured = $request->featured;
       $property->save();
        $features = $request->totalfeatured;
        $total = $features-1;
       $package = Packages::find($request->package_id);
       $package->featured = $total;
       $package->save();
       return back();
        }
        if($request->featured=='0'){
            $property = Property::find($request->property_id);
            $property->featured = $request->featured;
            $property->save();
            return back();
                  }
         
       
   }
   public function hot(Request $request){
    // dd($request->all());
  
    
             if($request->hot=='1'){
               $property = Property::find($request->property_id);
               $property->hot = $request->hot;
               $property->save();
                $hot = $request->totalhot;
                $total = $hot-1;
               $package = Packages::find($request->package_id);
               $package->hot = $total;
               $package->save();
               return back();
                }
                if($request->hot=='0'){
                    $property = Property::find($request->property_id);
                    $property->hot = $request->hot;
                    $property->save();
                    return back();
                          }

  
}


public function superhot(Request $request){
        
    if($request->superhot=='1'){
   $property = Property::find($request->property_id);
   $property->superhot = $request->superhot;
   $property->save();
    $superhot = $request->totalsuperhot;
    $total = $superhot-1;
   $package = Packages::find($request->package_id);
   $package->superhot = $total;
   $package->save();
   return back();
    }
    if($request->superhot=='0'){
        $property = Property::find($request->property_id);
        $property->superhot = $request->superhot;
        $property->save();
        return back();
     }
     
   
}


public function refresh(Request $request){
        
    if($request->refresh=='1'){
   $property = Property::find($request->property_id);
   $property->refresh = $request->refresh;
   $property->save();
    $refresh = $request->totalrefresh;
    $total = $refresh-1;
   $package = Packages::find($request->package_id);
   $package->refresh = $total;
   $package->save();
   return back();
    }
    if($request->refresh=='0'){
        $property = Property::find($request->property_id);
        $property->refresh = $request->refresh;
        $property->save();
        return back();
              }
     
   
}






}
