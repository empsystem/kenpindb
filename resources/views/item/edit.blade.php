@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">アイテム編集</div>
				<div class="panel-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form method="post" action="{{ route('item.update', ['id' => $item->id]) }}">
						<div class="form-group">
							<label>商品コード</label>
							<input type="text" name="code" value="{{ $item->code }}" class="form-control">
						</div>
						<div class="form-group">
							<label>商品名</label>
							<input type="text" name="name" value="{{ $item->name }}" class="form-control">
						</div>
						<div class="form-group">
							<label>JAN</label>
							<input type="text" name="jan" value="{{ $item->jan }}" class="form-control">
						</div>
						<div class="form-group">
							<label>コメント</label>
							<input type="text" name="comment" value="{{ $item->comment }}" class="form-control">
						</div>
						<div class="form-group">
							<label>画像1</label>
							<input type="text" name="image" value="{{ $item->image }}" class="form-control">
						</div>
						<div class="form-group">
							<label>画像2</label>
							<input type="text" name="image2" value="{{ $item->image2 }}" class="form-control">
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" value="更新" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
