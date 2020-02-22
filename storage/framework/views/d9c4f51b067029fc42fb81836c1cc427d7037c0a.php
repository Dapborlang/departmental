<?php $__env->startSection('script'); ?>
<script>
$(document).ready(function(){
	$("#bardcode").focusout(function(event) {
		var barcode=$(this).val();
		$.ajax({
	        url: "<?php echo e(url('/')); ?>/getbarcode",
	        type: 'POST',
	        data: {
	        	"_token": "<?php echo e(csrf_token()); ?>",
	        	"barcode": barcode,
	        },
	        success: function(data)
	        {
	        	$("#name").val(data[0]['name']);	
	        	$("#product_id").val(data[0]['id']);        	
	        }
	    });		
	});
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
 	class="bg-secondary"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-3 my-3 border">
	<form id="counter" action="<?php echo e(url('/')); ?>/product" method="POST">
		<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-sm-3 bg-dark text-white">
				<div class="form-group">
					<label for="">Barcode:</label>
					 <input id="bardcode" type="text" class="form-control form-control-sm" autofocus>
				</div>
			</div>		

			<div class="col-sm-3 bg-primary text-white">
				<div class="form-group">
					<label for="">Name:</label>
					<input id="name" type="text" class="form-control form-control-sm">
				</div>
			</div>

			<input type="hidden" name="product_id" id="product_id" required>

			<div class="col-sm-3 bg-light text-black">
				<div class="form-group">
					<label for="">Quantity:</label>
					<input type="number" step="0.01" class="form-control form-control-sm" name="quantity" required>
				</div>
			</div>	

			<input type="hidden" name="type" value="CREDIT">

			<div class="col-sm-1">
				<div class="form-group">
					<label for="">&nbsp;</label>
					<input type="submit" class="form-control form-control-sm" value="Add Stock">
				</div>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/product/create.blade.php ENDPATH**/ ?>