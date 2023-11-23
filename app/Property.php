<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',    'price',        'featured',     'purpose',  'type',         'image',
        'slug',     'bedroom',      'bathroom',       'address',
        'area',     'agent_id',     'description',  'video',    'floor_plan',   
        'location_latitude',        'location_longitude',       'nearby',
        
    ];


    public function city()
    {
        return $this->belongsTo(city::class);
    }


    public function features()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }

    	
    public function state()
    {
        return $this->belongsTo(state::class);
    }
    public function socity()
    {
        return $this->belongsTo(socity::class);
    }
    
    public function phase()
    {
        return $this->belongsTo(phase::class);
    }
    public function block()
    {
        return $this->belongsTo(block::class);
    }
    public function sub_block()
    {
        return $this->belongsTo(sub_block::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'agent_id');
    }

    public function gallery()
    {
        return $this->hasMany(PropertyImageGallery::class);
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'property_id');
    }

}
