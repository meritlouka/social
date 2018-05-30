<?php $__env->startSection('section'); ?>
<nav class="navbar navbar-inverse ">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('posts')); ?>">Post Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="<?php echo e(URL::to('post')); ?>">View All Posts</a></li>
        <li><a href="<?php echo e(URL::to('post/create')); ?>">Create a Post</a>
    </ul>
</nav>

    <h1>Hello World</h1>

    <p>
        This view is loaded from module: <?php echo config('user.post'); ?>

    </p>
   
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    <?php if(count($posts) > 0): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Post</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><?php echo e($post->title); ?></div>
                                </td>
								<!-- Task Name -->
                                <td class="table-text">
                                    <div><?php echo e($post->content); ?></div>
                                </td>
                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('post::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>