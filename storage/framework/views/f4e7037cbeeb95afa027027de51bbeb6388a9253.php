

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('main'); ?>
    <section class="my-4">
        <h3>Login</h3>
    </section>

    <section class="my-4">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </section>

    <section class="d-flex justify-content-center my-4">
        <form class="bg-light border border-2 p-3 rounded d-flex flex-wrap flex-column gap-3"
        action="<?php echo e(route('auth.user')); ?>" method="post" >
            <?php echo csrf_field(); ?>
           
            <div>
                <label>Email:</label>
                <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>">
            </div>
            <div>
                <label>senha:</label>
                <input class="form-control" type="number" name="password" value="<?php echo e(old('senha')); ?>">
            </div>
            <div class=" text-end">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\cg. laravel\atv1\resources\views/login.blade.php ENDPATH**/ ?>