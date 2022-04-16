@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">商品詳細</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th>商品コード</th>
									<th>商品名</th>
									<th>JANコード</th>
									<th>コメント</th>
									<th>画像1</th>
									<th>画像2</th>
								</tr>
								<tr>
									<td nowrap>
										 <p>{{ $item->code }}</p>
									</td>
									<td nowrap>
										 <p>{{ $item->name }}</p>
									</td>
									<td nowrap>
										<p>{{ $item->jan }}</p>
									</td>
									<td nowrap>
										<p>{{ $item->comment }}</p>
									</td>
									<td nowrap>
										<p>{{ $item->image }}</p>
									</td>
									<td nowrap>
										<p>{{ $item->image2 }}</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p><a href="{{ route('item.edit', ['id' => $item->id]) }}">商品情報を編集する</a></p>
					<p><a href="{{ route('item.index') }}">商品一覧へ戻る</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
