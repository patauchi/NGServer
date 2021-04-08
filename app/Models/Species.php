<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];

    public function taxonomy()
    {
    	return $this->hasOne('App\Models\Taxonomy');
    }
    public function distribution()
    {
        return $this->hasOne('App\Models\distribution');
    }
    public function ecology()
    {
    	return $this->hasOne('App\Models\Ecology');
    }
    public function enm()
    {
        return $this->hasOne('App\Models\enm');
    }
    public function iucn()
    {
        return $this->hasOne('App\Models\iucn_status');
    }
    public function song()
    {
        return $this->hasOne('App\Models\Song');
    }
    public function threats()
    {
        return $this->hasOne('App\Models\Threats');
    }

    public function news()
    {
        return $this->belongstoMany('App\Models\News');
    }

    public function projects()
    {
        return $this->belongstoMany('App\Models\Project');
    }


}
