@extends('layouts.app')
@section('script')
<script>
	$(document).ready(function(){
		$(".show").click(function()
		{
			var id=this.id;
			$("#barcode").val(id);
			$("#form1").submit();
		});
	});
</script>
@endsection

@section('body')
 	class="bg-secondary"
@endsection

@section('content')
<div class="container-fluid p-3 my-3 border">
	<form id="form1" onsubmit="setTimeout(function(){window.location.reload();},1)" action="{{ url('/') }}/stock" method="POST" target="_BLANK">
		{{csrf_field()}}
		<div class="row">
			<div class="col-sm-3 bg-dark text-white">
				<div class="form-group">
					<label for="">Barcode:</label>
					 <input id="barcode" name="barcode" type="text" class="form-control form-control-sm">
				</div>
			</div>	

			<input type="hidden" name="product_id" id="product_id" required>
			
			<div class="col-sm-1">
				<div class="form-group">
					<label for="">&nbsp;</label>
					<input type="submit" class="form-control form-control-sm" value="Show Detail">
				</div>
			</div>
		</div>
	</form>
	<table class="table bg-light text-black">
		<tr>
			<th>Sl No.</th>
			<th>Name</th>
			<th>Remaining</th>
			<th>Remark</th>
			<th>Option</th>
		</tr>
		@foreach(array_keys($ProductDetail) as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$ProductDetail[$item]['name']}}</td>
			<td>{{$ProductDetail[$item]['remaining']}}</td>
			<td>@if(($ProductDetail[$item]['remaining'])<10)<span class="text-danger">Low/Out of stock</span> @endif </td>
			<td><button id="{{$ProductDetail[$item]['barcode']}}" class="btn btn-primary btn-sm show">Show Detail</button></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection