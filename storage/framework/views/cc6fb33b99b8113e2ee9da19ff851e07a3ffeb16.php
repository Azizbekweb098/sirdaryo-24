<?php $__env->startSection('content'); ?>
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <a href="<?php echo e(route('dashboard.categoris.create')); ?>" class="btn btn-primary">Create</a>
                <br>
                <br>
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>name_uz</th>
                    <th>name_en</th>
                    <th>slug</th>
                    <th>meta_title</th>
                    <th>meta_description</th>
                    <th>meta_keyword</th>
                    <th>holati</th>

                  </tr>
                </thead>
                <tbody>
             <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
                <td>1.</td>
                <td><?php echo e($ctg->name_uz); ?></td>
                <td><?php echo e($ctg->name_en); ?></td>
                <td><?php echo e($ctg->slug); ?></td>
                <td><?php echo e($ctg->meta_title); ?></td>
                <td><?php echo e($ctg->meta_descritption); ?></td>
                <td><?php echo e($ctg->meta_keywords); ?></td>
                <td>
                    <a href="#" class="btn btn-primary">update</a>
                    <a href="#" class="btn btn-danger">delete</a>
                </td>

              </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sirdaryo-2024\resources\views/admin/category/index.blade.php ENDPATH**/ ?>