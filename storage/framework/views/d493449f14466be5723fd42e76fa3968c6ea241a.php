<?php $__env->startSection('content'); ?>
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <form  action="<?php echo e(route('dashboard.posts.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">title_uz</label>
                    <input type="text" name="title_uz" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">title_en</label>
                    <input type="text" name="title_en" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file"  name="image" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">body_uz</label>
                    <input type="text"  name="body_uz" class="form-control" >
                  </div>      <div class="form-group">
                    <label for="exampleInputEmail1">body_en</label>
                    <input type="text"  name="body_en" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category_id" class="form-control">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name_uz); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>


                  </div>
                  <div class="form-group">
                    <label for="tags">Taglar:</label>
    <select name="tag_id[]" multiple>
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name_uz); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_title</label>
                    <input type="text"  name="meta_title" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_description</label>
                    <input type="text"  name="meta_descritption" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_keyword</label>
                    <input type="text"  name="meta_keywords" class="form-control" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sirdaryo-2024\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>