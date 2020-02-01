@extends('layouts.app')
@section('script')

@endsection

@section('body')
 	class="bg-secondary"
@endsection

@section('content')
<div class="container-fluid p-3 my-3 border">
	<form onsubmit="setTimeout(function(){window.location.reload();},1)" action="{{ url('/') }}/stock" method="POST" target="_BLANK">
		{{csrf_field()}}
		<div class="row">
			<div class="col-sm-3 bg-dark text-white">
				<div class="form-group">
					<label for="">Barcode:</label>
					 <input id="barcode" name="barcode" type="text" class="form-control form-control-sm">
				</div>
			</div>		

			<div class="col-sm-3 bg-primary text-white">
				<div class="form-group">
					<label for="">Name:</label>
					<input id="name" type="text" class="form-control form-control-sm">
				</div>
			</div>

			<input type="hidden" name="product_id" id="product_id" required>
			
			<div class="col-sm-1">
				<div class="form-group">
					<label for="">&nbsp;</label>
					<input type="submit" class="form-control form-control-sm" value="Show Stock">
				</div>
			</div>
		</div>
	</form>
	<table>
		<tr>
			<td>Sl No.</td>
			<td>Name</td>
			<td>Remaining</td>
		</tr>
		@foreach($product as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$item->name}}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection