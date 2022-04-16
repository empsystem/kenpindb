<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'code' => 'required|alpha_dash|max:30',
			'name' => 'required|max:100',
			'jan' => 'required|digits:13',
			'comment' => 'max:300',
			'image' => 'max:300',
			'image2' => 'max:300',
		];
	}

	public function messages()
	{
		return [
		'required' => ':attributeは必須です。',
		'jan.digits' => 'JANコードは13文字の数字で入力してください。',
		'alpha_dash' => ':attributeは半角英数字で入力してください。',
		];
	}

	public function attributes()
	{
		return [
		'code' => '商品コード',
		'name' => '名前',
		'jan' => 'JANコード',
		'comment' => 'コメント',
		'image' => '画像1',
		'image2' => '画像2',
		];
	}
}
