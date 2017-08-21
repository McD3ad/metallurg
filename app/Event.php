<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	/**
	 * @return mixed
	 */
	public function artists()
	{
		return belongsToMany(Artist::class);
    }
}
