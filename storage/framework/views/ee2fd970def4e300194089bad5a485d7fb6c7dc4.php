<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<?php if(session()->has('message')): ?>
	    <div class="alert alert-success">
	        <?php echo e(session()->get('message')); ?>

	    </div>
	<?php endif; ?>
	<form method="POST" action="<?php echo e(url('/')); ?>/formpopulateindex" target="" class="bg-secondary">	
		<?php echo e(csrf_field()); ?>

		<div class="card bg-info text-white">
			<div class="card-header bg-secondary">Form Populate Index</div>
			<div class="card-body">	
				<div class="row">									
					<div class="col-sm-6">
						<div class="form-group">
			                <label for="form_populate_id">Form Populate Id</label>
			                <select class="form-control " id="form_populate_id" name="form_populate_id">
				                <?php $__currentLoopData = $formPopulate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <option value="<?php echo e($item->id); ?>"><?php echo e($item->model); ?></option>
				                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            </select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
			                <label for="exclude">Exclude</label>
			                <input type="text" class="form-control " id="exclude" name="exclude">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
			                <label for="notes">Notes</label>
			                <input type="text" class="form-control " id="notes" name="notes">
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="card-footer">
				
			</div> -->
		</div>
		<div class="card bg-light text-black">
		<div class="card-header bg-secondary text-white">Form Populate Create</div>
		<div class="card-body">	
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
		                <label for="script">Script</label>
		                <textarea rows="4" class="form-control " id="script" name="script"></textarea> 
		            </div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
		                <label for="master_keys">Master Keys</label>
		                <input type="text" class="form-control " id="master_keys" name="master_keys">
		            </div>
					<div class="form-group">
		                <label for="foreign_keys">Foreign Keys</label>
		                <input type="text" class="form-control " id="foreign_keys" name="foreign_keys">
		            </div>
		            <div class="form-group">
		                <label for="attribute">Attributes</label>
		                <input type="text" class="form-control " id="attribute" name="attribute">
		            </div>
					<div class="form-group">
		                <label for="cnotes">Cnotes</label>
		                <input type="text" class="form-control " id="cnotes" name="cnotes">
		            </div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="offset-md-5">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/formpopulate/resources.blade.php ENDPATH**/ ?>