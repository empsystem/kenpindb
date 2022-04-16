@extends('layouts.app')

</script>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="text-center">JANコードで検索</h2>
				</div>
				<div class="panel-body text-center">
					<p class="text-danger"><b>※全角不可　文字入力モードをAにしてください</b></p>
					<form class="form-inline" name="form1" action="{{ route('index') }}">
						<div class="form-group">
							<input type="number" name="jan" id="jan" autofocus>
							<input type="submit" value="検索" class="btn btn-success">
						</div>
					</form>
					<br>
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(!isset($item->code))
					@else
					<div class="table">
						<table class="table">
							<tbody>
								<tr>
									<th>
										<p class="text-center">商品コード</p>
									</th>
									<th>
										<p class="text-center">商品名</p>
									</th>
									<th>
										<p class="text-center">JANコード</p>
									</th>
								</tr>
								<tr>
									<td>
										<p class="text-center">{{ $item->code }}</a></p>
									</td>
									<td>
										<p class="text-center">{{ $item->name }}</p>
									</td>
									<td>
										<p class="text-center">{{ $item->jan }}</p>
									</td>
								</tr>
							</tbody>
						</table>
						<p>{{ $item->comment }}</p>
						<div class="row">
							<div class="col-sm-6">
									<img src="{{ $item->image }}" class="img-responsive">
							</div>
							<div class="col-sm-6">
									<img src="{{ $item->image2 }}" class="img-responsive">
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
