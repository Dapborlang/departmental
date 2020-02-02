<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
 	class="bg-secondary"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-3 my-3 border">
	<form id="form1" onsubmit="setTimeout(function(){window.location.reload();},1)" action="<?php echo e(url('/')); ?>/stock" method="POST" target="_BLANK">
		<?php echo e(csrf_field()); ?>

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
		<?php $__currentLoopData = array_keys($ProductDetail); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($loop->iteration); ?></td>
			<td><?php echo e($ProductDetail[$item]['name']); ?></td>
			<td><?php echo e($ProductDetail[$item]['remaining']); ?></td>
			<td><?php if(($ProductDetail[$item]['remaining'])<10): ?><span class="text-danger">Low/Out of stock</span> <?php endif; ?> </td>
			<td><button id="<?php echo e($ProductDetail[$item]['barcode']); ?>" class="btn btn-primary btn-sm show">Show Detail</button></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/product/index.blade.php ENDPATH**/ ?>