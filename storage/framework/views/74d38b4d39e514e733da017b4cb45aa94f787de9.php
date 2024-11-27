<?php $__env->startSection('content'); ?>
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <a href="<?php echo e(route('dashboard.posts.create')); ?>" class="btn btn-primary">Create</a>
                <br>
                <br>
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>title_uz</th>
                    <th>title_en</th>
                    <th>image</th>
                    <th>slug</th>
                    <th>body_uz</th>
                    <th>body_en</th>
                    <th>category</th>
                    <th>tag</th>
                    <th>holati</th>

                  </tr>
                </thead>
                <tbody>
             <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
                <td>1.</td>
                <td><?php echo e($post->title_uz); ?></td>
                <td><?php echo e($post->title_en); ?></td>
                <td><img src="/images/<?php echo e($post->image); ?>" alt=""></td>
                <td><?php echo e($post->slug); ?></td>
                <td><?php echo e($post->body_uz); ?></td>
                <td><?php echo e($post->body_en); ?></td>
                <td><?php echo e($post->category ? $post->category->name_uz : 'No category'); ?></td>
                <td>
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><?php echo e($tag->name_uz); ?></span><?php if(!$loop->last): ?>, <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>


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



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sirdaryo-2024\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>