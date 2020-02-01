<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
 	class="bg-secondary"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-3 my-3 border">	
	<div class="card bg-light text-black">
		<div class="card-header bg-info"><?php echo e($product->name); ?></div>
		<div class="card-body">	
			<table class="table">
				<tr>
					<td>Sl</td>
					<td>Date</td>
					<td>Quantity</td>
					<td>Transaction</td>
				</tr>
				<?php $__currentLoopData = $product->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($loop->iteration); ?></td>
					<td><?php echo e($item->created_at); ?></td>
					<td><?php echo e($item->quantity); ?></td>
					<td><?php echo e($item->type); ?></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/product/stock.blade.php ENDPATH**/ ?>