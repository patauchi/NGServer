<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['title', 'description'];

	public function news()
    {
        return $this->belongstoMany('App\Models\News');
    }

    public function species()
    {
        return $this->belongstoMany('App\Models\Species');
    }
}
