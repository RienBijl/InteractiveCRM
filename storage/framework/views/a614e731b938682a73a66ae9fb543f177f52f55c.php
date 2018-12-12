<?php $__env->startSection('content'); ?>
<div class="container">

    

    <div class="row justify-content-center">
        <div class="col-md-8">

            
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img src="<?php echo e(asset('img/svg/login.svg')); ?>" alt="Login icon" class="img-fluid">
                                </div>
                                <div class="col-sm-12 col-md-10">
        
                                    <h2>Reset password</h2>
                                    <p>
                                        Reset your company account in case of a lost password. <br>
                                        <a href="<?php echo e(url('/login')); ?>">Return to login</a>
                                    </p>
        
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

            <div class="card">

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<style>
    
        body  {
            background-image: url(<?php echo e(asset("img/login-bg.png")); ?>) !important;
        }
        
        </style>
<?php echo $__env->make('layouts.app-small', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>