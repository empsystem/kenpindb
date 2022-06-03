<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ItemRequest;
use App\Imports\ItemImport;
use App\Exports\ItemExport;
use Maatwebsite\Excel\Facades\Excel;

//Itemモデルの使用
use App\Item;

class ItemController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(Request $request)
	{
		//ページネーション数を受け取り
		$paginate = $request->paginate;
		if (empty($paginate)) {
			$paginate = 50;
		}

		//キーワード受け取り
		$keyword = $request->keyword;
		$query = Item::query();

		if(!empty($keyword)) {
			$query->where('name', 'like', '%' . $keyword . '%');
		}

		//itemsテーブルの全レコードを取得
		$items = $query->orderBy('id', 'desc')->paginate($paginate);

		//レコード取得結果をビューに返す
		return view('item.index', compact('items'));
	}

	public function detail($id)
	{
		//レコードを検索
		$item = Item::findOrFail($id);

		//検索結果をビューに返す
		return view('item.detail', compact('item'));
	}


	public function create()
	{
		//createに転送
		return view('item.create');
	}

	public function store(ItemRequest $request)
	{
		//itemオブジェクト生成
		$item = new Item;

		//値の登録
		$item->code = $request->code;
		$item->name = $request->name;
		$item->jan = $request->jan;
		$item->comment = $request->comment;
		$item->image = $request->image;
		$item->image2 = $request->image2;

		//保存
		$item->save();

		//一覧にリダイレクト
		return redirect()->route('item.index');
	}

	public function edit($id)
	{

		//レコードを検索
		$item = Item::findOrFail($id);

		//検索結果をビューに返す
		return view('item.edit', compact('item'));
	}

	public function update(ItemRequest $request, $id)
	{
		//レコードを検索
		$item = Item::findOrFail($id);

		//値を代入
		$item->code = $request->code;
		$item->name = $request->name;
		$item->jan = $request->jan;
		$item->comment = $request->comment;
		$item->image = $request->image;
		$item->image2 = $request->image2;

		//保存
		$item->save();
		return redirect()->route('item.detail', ['id' => $id]);
	}

	public function importform()
	{
		return view('item.importform');
	}

	public function import()
	{
		Excel::import(new ItemImport, request() -> file('file'));
		return back();
	}

	public function export()
	{
		return Excel::download(new ItemExport, 'items.xlsx');
	}


}
