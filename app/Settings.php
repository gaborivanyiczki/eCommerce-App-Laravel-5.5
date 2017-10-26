<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable =[

        'id', 'title', 'favicon', 'logo', 'phone', 'other_phone', 'email', 'alternative_contact'
    ];
}
