<?php $__env->startSection('content'); ?>
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <form  action="<?php echo e(route('dashboard.tags.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name_uz</label>
                    <input type="text" name="name_uz" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">name_en</label>
                    <input type="text"  name="name_en" class="form-control" >
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sirdaryo-2024\resources\views/admin/tags/create.blade.php ENDPATH**/ ?>