
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <?php if(\Session::has('message')): ?>
                        <p class="alert alert-info">
                            <?php echo e(\Session::get('message')); ?>

                        </p>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <h1><?php echo e(trans('panel.site_title')); ?></h1>
                        <p class="text-muted"><?php echo e(trans('global.login')); ?></p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required autofocus placeholder="<?php echo e(trans('global.login_email')); ?>" value="<?php echo e(old('email', null)); ?>">
                            <?php if($errors->has('email')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required placeholder="<?php echo e(trans('global.login_password')); ?>">
                            <?php if($errors->has('password')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('password')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                    <?php echo e(trans('global.remember_me')); ?>

                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">
                                    <?php echo e(trans('global.login')); ?>

                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(trans('global.forgot_password')); ?>

                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\lauren\sca-final_project\Laravel-Appointments\resources\views/auth/login.blade.php ENDPATH**/ ?>