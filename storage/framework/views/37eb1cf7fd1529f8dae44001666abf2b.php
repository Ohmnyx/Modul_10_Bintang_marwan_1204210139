<?php $__env->startSection('content'); ?>
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</div>
    <?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ehehehe\test_2\resources\views/profile.blade.php ENDPATH**/ ?>