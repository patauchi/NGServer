<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newscategorie extends Model
{
    use HasFactory;
	protected $fillable=['name'];

    public function news()
    {
    	return $this->hasMany('App\Models\News');
    }
}
