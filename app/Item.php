<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	//items2テーブルとの紐付け
	protected $table = 'items2';

	protected $fillable = [
		'code',
		'name',
		'jan',
		'image',
		'comment',
		'image2'
	];
	

	//created_atとupdated_atを使わない
	public $timestamps = false;
}
