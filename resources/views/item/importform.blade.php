@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">エクセルインポート <span class="text-danger">(.xlsx) ※CSV不可</span></div>
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
					<form method="post" action="{{ route('item.import') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">
							<input type="file" name="file">
							<br>
							<button class="btn btn-primary">アップロード</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
