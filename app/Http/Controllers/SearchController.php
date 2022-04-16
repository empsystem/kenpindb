<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchRequest;

//Itemモデルの使用
use App\Item;

class SearchController extends Controller
{
	public function index(SearchRequest $request)
	{

		//jan受け取り
		$jan = $request->jan;
		$item = Item::where('jan', $jan)->first();

		//レコード取得結果をビューに返す
		return view('search.index', compact('item'));
	}

}
