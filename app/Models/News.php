<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = ['metaTitle',
    'metaDescription',
    'pageSlug',
    'category',
    'subcategory',
    'title',
    'subtitle',
    'shortDescription',
    'largDescription',
    'authorNews',
    'imageTitle',
    'imageSlug',
    'imageAuthor' ,
    'status',
    'homeMain',
    'newsMain',
    'categorie_id'];


	public function getRouteKeyName()
	{
		return 'pageSlug';
	}

	public function newscategory()
    {
    	return $this->belongsTo('App\Models\Newscategorie', 'categorie_id');
    }

    public function species()
    {
    	return $this->belongstoMany('App\Models\Species');
    }
    public function projects()
    {
    	return $this->belongstoMany('App\Models\Project');
    }

}
