<!--  -->
<?php $__env->startSection('layouts'); ?>
    <h1>Post Layout </h1>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>