<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Products extends Model
{
    use Sluggable;
    protected $fillable= [

        'subcategory_id', 'title', 'description', 'price', 'availability', 'image'

    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function category(){

        return $this->belongsTo('App/Category');
    }

    public function brand(){

        return $this->belongsTo('App/Brand');
    }
}
