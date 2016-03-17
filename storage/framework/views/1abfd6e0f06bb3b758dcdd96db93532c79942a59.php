<?php $__env->startSection('content'); ?>
<div class="container">
  <a class="btn btn-default" href="/admin/adminproductform" role="button">Add Product data</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>description</th>
        <th>price</th>
        <th>old_price</th>
        <th>currency</th>
        <th>img_url</th>
        <th>field_path</th>
      </tr>
    </thead>
    <?php foreach($data as $value): ?>
    <tbody>
      <tr>
        <td><?php echo e($value->id); ?></td>
        <td><?php echo e($value->title); ?></td>
        <td><?php echo e($value->description); ?></td>
        <td><?php echo e($value->price); ?></td>
        <td><?php echo e($value->old_price); ?></td>
        <td><?php echo e($value->currency); ?></td>
        <td><?php echo e($value->img_url); ?></td>
        <td><?php echo e($value->file_path); ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>