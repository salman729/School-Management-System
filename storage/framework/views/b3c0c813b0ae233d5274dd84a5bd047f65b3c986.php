<?php $__env->startSection('title','Edit Exam Term'); ?>
<?php $__env->startSection('content'); ?>
<div class="panel-body">
	<?php echo $__env->make('includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <div class="col-lg-12">
            <h3>Edit Exam Term</h3>
            <form role="form" method="POST" action="<?php echo e(url('updateExamTerm')); ?>">
                <div class="col-md-4">
            
                    <div class="form-group">
                        <label>Exam Term<span style="color: red" class="required">*</span></label>
                        <input type="hidden" name="id" value="<?php echo e($examTerm->id); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input name="examTermName" class="form-control" value="<?php echo e($examTerm->examTermName); ?>" required="required" placeholder="Enter ExamTerm">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-default">Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
        </div>
     </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.footer2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.sidebar2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>