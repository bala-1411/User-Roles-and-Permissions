<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
            
                <a class="btn btn-success btn-sm mb-2" href="<?php echo e(route('roles.create')); ?>"><i class="fa fa-plus"></i> Create New Role</a>
            
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
     <th width="100px">No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($role->name); ?></td>
        <td>
            <a class="btn btn-info btn-sm" href="<?php echo e(route('roles.show',$role->id)); ?>"><i class="fa-solid fa-list"></i> Show</a>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.edit',$role->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
            <form method="POST" action="<?php echo e(route('roles.destroy', $role->id)); ?>" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo $roles->links('pagination::bootstrap-5'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-11-User-Roles-and-Permissions-main\resources\views/roles/index.blade.php ENDPATH**/ ?>