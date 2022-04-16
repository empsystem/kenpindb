@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="panel panel-default">
				<div class="panel-heading">
					商品一覧
				</div>
				<div class="panel-body">
					<form class="form-inline" action="{{ route('item.index') }}">
						<div class="form-group">
							<input type="text" name="keyword">
							<input type="submit" value="検索" class="btn btn-success">
						</div>
					</form>
					<br>
					<div class=".mt-2 mr-1">
						<button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.create') }}'">商品登録</button>
						<button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.importform') }}'">エクセルインポート</button>
						<button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.export') }}'">CSVダウンロード</button>
					</div>
					<br>
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th></th>
									<th>商品コード</th>
									<th>商品名</th>
									<th>JANコード</th>
									<th>コメント</th>
									<th>画像1</th>
									<th>画像2</th>
								</tr>
								@foreach ($items as $item)
									<tr>
										<td>
											<p><button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.edit', ['id'=> $item->id]) }}'">編集</button></p>
											</td>
										<td>
											<p>{{ $item->code }}</a></p>
										</td>
										<td nowrap>
											<p>{{ $item->name }}</p>
										</td>
										<td>
											<p>{{ $item->jan }}</p>
										</td>
										<td nowrap>
											<p>{{ $item->comment }}</p>
										</td>
										<td>
											<p>{{ $item->image }}</p>
										</td>
										<td>
											<p>{{ $item->image2 }}</p>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<form class="form-inline" action="{{ route('item.index') }}">
						表示件数：
						<select name="paginate" onchange="submit();">
						<option value="30">30</option>
						<option value="50" selected="selected">50</option>
						<option value="100">100</option>
						<option value="200">200</option>
						</select>
					</form>
					{{ $items->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
