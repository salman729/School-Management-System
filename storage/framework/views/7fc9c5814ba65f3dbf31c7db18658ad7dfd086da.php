<?php $__env->startSection('title','Edit Period'); ?>
<?php $__env->startSection('content'); ?>
<div class="panel-body">
	<?php echo $__env->make('includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-group row" role="form" method="post" action="<?php echo e(url('updatePeriods')); ?>"  enctype="multipart/form-data">

                <div class="col-md-4"> 
                    <div class="form-group">
                    <label>Name<span style="color: red" class="required">*</span></label>
                    <input type="hidden" name="id" value="<?php echo e($periods->id); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input name="periodName" class="form-control" value="<?php echo e($periods->periodName); ?>" required="required" placeholder="Enter Period Name">
                    </div>

                    <div class="form-group">
                    <label>Time<span style="color: red" class="required">*</span></label>
                    <select custom class="form-control" name="time_id" required="required">
                        <option value="">Select One</option>
                        <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($periods->time_id == $time->id) ? 'selected' : ''); ?> value="<?php echo e($time->id); ?>"><?php echo e($time->time_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                    <div class="form-group">
                    <label>Day<span style="color: red" class="required">*</span></label>
                    <select custom class="form-control" name="day_id" required="required">
                        <option value="">Select One</option>
                        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($periods->day_id == $day->id) ? 'selected' : ''); ?> value="<?php echo e($day->id); ?>"><?php echo e($day->day_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                    <div class="form-group">
                    <label>Class Room<span style="color: red" class="required">*</span></label>
                    <select custom class="form-control" name="classRoom_id" required="required">
                        <option value="">Select One</option>
                        <?php $__currentLoopData = $classRooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classRoom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($periods->classRoom_id == $classRoom->id) ? 'selected' : ''); ?> value="<?php echo e($classRoom->id); ?>"><?php echo e($classRoom->cRoom_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                   
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </div>
            </form>
        </div>
     </div>
</div>
<script>
    $(document).ready(function(){
      $('#status').bootstrapToogle({
        on: 'active',
        off: 'inactive'
      });  
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>