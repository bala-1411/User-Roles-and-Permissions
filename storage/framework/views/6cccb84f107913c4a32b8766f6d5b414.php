<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-2" href="<?php echo e(route('users.create')); ?>"><i class="fa fa-plus"></i> Create New User</a>
        </div>
    </div>
</div>

<?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
    <div class="alert alert-success" role="alert"> 
        <?php echo e($value); ?>

    </div>
<?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

<table class="table table-bordered">
   <tr>
       <th>No</th>
       <th>Name</th>
       <th>Email</th>
       <th>Roles</th>
       <th width="280px">Action</th>
   </tr>
   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td>
          <?php if(!empty($user->getRoleNames())): ?>
            <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <label class="badge bg-success"><?php echo e($v); ?></label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </td>
        <td>
             
             <a class="btn btn-primary btn-sm" href="<?php echo e(route('users.edit',$user->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
              <form method="POST" action="<?php echo e(route('users.destroy', $user->id)); ?>" style="display:inline">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>

                  <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
        </td>
    </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo $data->links('pagination::bootstrap-5'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-11-User-Roles-and-Permissions-main\resources\views/users/index.blade.php ENDPATH**/ ?>