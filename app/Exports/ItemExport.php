<?php

namespace App\Exports;

use App\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemExport implements FromCollection,WithHeadings
{
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function collection()
	{
		return Item::all()->makeHidden('id');
	}

	public function headings():array
	{
		return [
			'code',
			'name',
			'jan',
			'image',
			'comment',
			'image2'
		];
	}
}
