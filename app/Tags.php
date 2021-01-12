<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	public function posts()
	{
		return $this->belongsToMany('App\Posts');
	}

    protected $table = 'tags';
    protected $fillable = ['name', 'slug'];
}
