

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="" style="border: solid 1px black;">
                        <h4 class=" text-center" style="margin: 40px 20px">Màn hình đăng nhập</h4>
                        <div class="" style="margin: 40px 20px;">
                            <form method="POST" action="<?php echo e(route('user.authUser')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <div class="row text-center">
                                        <div class="col-md-4" style="">Email</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="email" style="border: solid 1px; width: 215px;" name="email" required
                                           autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                <div class="row text-center">
                                        <div class="col-md-4">Mật khẩu</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="password"  id="password" style="border: solid 1px; width: 215px;" name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                        </label>
                                    </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-7" style="text-align: right; margin-top: 6px;">
                                        <a href="#" style="text-align: right; text-decoration: none; font-size: 13px;">Quên mật khẩu?</a>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="" style="margin-left: 15px; ">
                                    <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel_Lad7\resources\views/crud_user/login.blade.php ENDPATH**/ ?>