<?php $__env->startSection('section'); ?>
<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<?php echo e(Form::open(array('url' => 'post'))); ?>


    <div class="form-group">
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', Input::old('title'), array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('content', 'Content')); ?>

        <?php echo e(Form::text('content', Input::old('content'), array('class' => 'form-control'))); ?>

    </div>

   
    <?php echo e(Form::submit('Create the Nerd!', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('post::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>