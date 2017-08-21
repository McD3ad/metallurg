<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	protected $fillable = [
		'name',
		'body',
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function gigs()
    {
    	return $this->belongsToMany(Gig::class);
    }
}
