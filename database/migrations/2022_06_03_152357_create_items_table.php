<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('code')->nullable()->commnet('商品コード');
			$table->string('name')->nullable()->commnet('商品名');
			$table->integer('jan')->comment('JANコード');
			$table->string('comment')->comment('コメント');
			$table->string('image')->nullable()->comment('画像1');
			$table->string('image2')->nullable()->comment('画像2');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('items');
	}
}
