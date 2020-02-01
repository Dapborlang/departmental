<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
</head>
<body>
	<center>Braddy Departmental Store<br>
		Mawlai Mawroh<br>
		GSTIN:
		<hr>
		TAX INVOICE
		<hr>
	</center>
	Invoice No: {{$invoice->id}} Dt: {{$invoice->created_at}}
	<hr>
	<table width="100%">
		<tr>
			<td>
				Sl. No
			</td>
			<td colspan="2">
				Details
			</td>
		</tr>
		<tr>
			<td style='border-bottom:1pt solid black'>
				Qnty
			</td>
			<td style='border-bottom:1pt solid black'>
				Rate
			</td>
			<td style='border-bottom:1pt solid black'>
				Amount
			</td>
		</tr>
	@foreach($invoice->sale as $item)
	<tr>
			<td>
				{{$loop->iteration}}
			</td>
			<td colspan="2">
				{{$item->product->name}}
			</td>
		</tr>
		<tr>
			<td>
				{{$item->quantity}}
			</td>
			<td>
				{{$item->rate}}
			</td>
			<td>
				@php
				$amount=($item->quantity)*($item->rate);
				 $total[]=$amount;
				@endphp
				{{$amount}}
			</td>
		</tr>
	
	@endforeach
		<tr>
			<td  style='border-top:1pt solid black'>
			</td>
			<td  style='border-top:1pt solid black'>
				Total
			</td>
			<td style='border-top:1pt solid black'>
				{{array_sum($total)}}
			</td>
		</tr>
	</table>
</body>
</html>