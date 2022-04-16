<?php

namespace App\Imports;

use App\Item;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ItemImport implements OnEachRow, WithHeadingRow
{
	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public function OnRow(Row $row)
	{
		$row = $row->toArray();
		$item = Item::updateOrCreate (
			//重複アップデートカラムを指定
			['jan' => $row['jan']],
			//データベースのカラムとエクセルのカラムを紐付け
			[
				'code' => $row['code'],
				'name' => $row['name'],
				'jan' => $row['jan'],
				'image' => $row['image'],
				'comment' => $row['comment'],
				'image2' => $row['image2'],
			]
		);
	}
}
