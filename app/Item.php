<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{

	protected $fillable = [
		'code',
		'name',
		'jan',
		'image',
		'comment',
		'image2'
	];
}
