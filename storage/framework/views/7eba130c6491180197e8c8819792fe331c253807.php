
<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('login.custom')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1-github-workspace\1-tailieuweb\21-training-laravel\training-laravel\resources\views/crud_user/login.blade.php ENDPATH**/ ?>
