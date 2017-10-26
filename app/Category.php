<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
        protected $fillable = [

            'name', 'image', 'parent_id'

        ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
       public function products(){

        return $this->hasMany('App/Products');
           }

        public function parent()
         {
          return $this->belongsTo(self::class, 'parent_id');
         }

         public function children()
         {
        return $this->hasMany(self::class, 'parent_id');
          }

        public function isParent(){

           if($this->parent_id == "0" ){
            return true;
            }
        return false;
         }

}
