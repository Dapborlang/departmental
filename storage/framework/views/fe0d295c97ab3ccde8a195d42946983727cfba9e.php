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
	        	$("#p_id").val(data[0]['id']);
	        	$("#name").val(data[0]['name']);
	        	$("#rate").val(data[0]['rate']);	        	
	        }
	    });		
	});

	$("#counter").submit(function(e)
	{
		var product_id=$("#p_id").val();
		if($('#'+product_id+'').length>0)
		{
			return false;
		}
		var p_name=$("#name").val();
		var p_rate=$("#rate").val();
		var p_quantity=$("#quantity").val();
		var data='<div id="'+product_id+'" class="row"><input type="hidden" name="product_id[]" value="'+product_id+'">';
		data+='<div class="col-sm-3">Name: <input type="text" name="p_name[]" value="'+p_name+'" readonly></div>';

		data+='<div class="col-sm-3">Quantity: <input " type="number" name="p_quantity[]" value="'+p_quantity+'"></div>';

		data+='<div class="col-sm-3">Rate: <input type="text" name="p_rate[]" value="'+p_rate+'" readonly></div>';
		
		data+='<button id="'+product_id+'b" type="button" class="btn btn-danger btn-sm" onclick="remove('+product_id+')">Remove Item</button></div></div>';
		$("#data").append(data);	
		$("#counter")[0].reset();;    
		e.preventDefault();
	});
	

});

function remove(id)
	{
		var elmnt = document.getElementById(id);
		elmnt.remove();
	}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
 class="bg-secondary"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-3 my-3 border">
<form id="counter" action="" method="POST">
		<div class="row">
			<div class="col-sm-3 bg-dark text-white">
				<div class="form-group">
					<label for="">Barcode:</label>
					 <input id="bardcode" type="text" class="form-control form-control-sm" name="bardcode" required>
				</div>
			</div>
			
			<div class="col-sm-3 bg-primary text-white">
				<div class="form-group">
					<label for="">Name:</label>
					<input id="name" type="text" class="form-control form-control-sm" name="description" required>
				</div>
			</div>

			<div class="col-sm-2 bg-info text-white">
				<div class="form-group">
					<label for="">Rate:</label>
					<input id="rate" type="text" class="form-control form-control-sm" name="rate" required>
				</div>
			</div>

			<div class="col-sm-3 bg-light text-black">
				<div class="form-group">
					<label for="">Quantity:</label>
					<input type="number" class="form-control form-control-sm" id="quantity" name="quantity" required>
				</div>
			</div>
			<input type="hidden" id="p_id">
			<div class="col-sm-1">
				<div class="form-group">
					<label for="">&nbsp;</label>
					<input type="submit" class="form-control form-control-sm" name="" value="Add">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="container p-3 my-3 border bg-light">
	<form onsubmit="setTimeout(function(){window.location.reload();},1)" action="<?php echo e(url('/')); ?>/counter" method="POST" target="_BLANK">
		<?php echo e(csrf_field()); ?>

		<div id="data" class="">
			
		</div>
		<div class="offset-5 col-8">
				<div class="form-group">
					<input type="submit" class="btn btn-sm" value="Save and Print"required>
				</div>
			</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/sale/create.blade.php ENDPATH**/ ?>