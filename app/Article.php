<?php

namespace Codecourse;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassAssignmentException;
use Carbon\Carbon;

class Article extends Model
{
    
	protected $fillable = ['title','body','published_at','user_id'];

	protected $dates = ['published_at']; # "dates" is from Model getDates() function

	# Use "scope" for clean code query

	public function scopePublished($query){

		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query){

		$query->where('published_at', '>', Carbon::now());
	}

	# Set Published attribute
	public function setPublishedAtAttribute($date){

		$this->attributes['published_at'] = Carbon::parse($date);
	}

	public function user(){

		return $this->belongsTo('Codecourse\User'); # user_id

	}

}
