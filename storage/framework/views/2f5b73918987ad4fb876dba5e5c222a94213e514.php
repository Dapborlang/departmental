<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
</head>
<body>
	<center>All Discounted Departmental Store<br>
		Mawlai Mawroh<br>
		<hr>
		INVOICE
		<hr>
	</center>
	Invoice No: <?php echo e($invoice->id); ?> Dt: <?php echo e($invoice->created_at); ?>

	<hr>
	<table width="100%">
		<tr>
			<td>
				Sl. No
			</td>
			<td colspan="3">
				Details
			</td>
		</tr>
		<tr>
			<td style='border-bottom:1pt solid black'>
				Qnty
			</td>
			<td style='border-bottom:1pt solid black'>
				MRP
			</td>
			<td style='border-bottom:1pt solid black'>
				Rate
			</td>
			<td style='border-bottom:1pt solid black'>
				Amount
			</td>
		</tr>
	<?php $__currentLoopData = $invoice->sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
			<td>
				<?php echo e($loop->iteration); ?>

			</td>
			<td colspan="2">
				<?php echo e($item->product->name); ?>

			</td>
		</tr>
		<tr>
			<td>
				<?php echo e($item->quantity); ?>

			</td>
			<td>
				<?php echo e($item->product->m_r_p); ?>

			</td>
			<td>
				<?php echo e($item->rate); ?>

			</td>
			<td>
				<?php
				$amount=($item->quantity)*($item->rate);
				 $total[]=$amount;
				?>
				<?php echo e($amount); ?>

			</td>
		</tr>
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td  style='border-top:1pt solid black'>
			</td>
			<td colspan="2" style='border-top:1pt solid black'>
				Total
			</td>
			<td style='border-top:1pt solid black'>
				<?php echo e(array_sum($total)); ?>

			</td>
		</tr>
	</table>
</body>
</html><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/sale/print.blade.php ENDPATH**/ ?>