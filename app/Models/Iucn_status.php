<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iucn_status extends Model
{
    use HasFactory;
    public function species()
    {
    	return $this->belongsTo('App\Models\Species');
    }
}
