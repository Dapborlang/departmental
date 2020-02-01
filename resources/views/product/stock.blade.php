@extends('layouts.app')
@section('script')

@endsection

@section('body')
 	class="bg-secondary"
@endsection

@section('content')
<div class="container-fluid p-3 my-3 border">	
	<div class="card bg-light text-black">
		<div class="card-header bg-info">{{$product->name}}</div>
		<div class="card-body">	
			<table class="table">
				<tr>
					<td>Sl</td>
					<td>Date</td>
					<td>Quantity</td>
					<td>Transaction</td>
				</tr>
				@foreach($product->detail as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->created_at}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->type}}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection