<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
 	class="bg-secondary"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-3 my-3 border">
	<form onsubmit="setTimeout(function(){window.location.reload();},1)" action="<?php echo e(url('/')); ?>/stock" method="POST" target="_BLANK">
		<?php echo e(csrf_field()); ?>

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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/product/index.blade.php ENDPATH**/ ?>