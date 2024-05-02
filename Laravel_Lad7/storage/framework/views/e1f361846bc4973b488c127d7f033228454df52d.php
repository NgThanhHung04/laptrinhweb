

<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="border: solid 1px black;">
                        <h4 class="text-center" style="margin: 20px 10px;">Màn hình đăng kí</h4>
                        <div class="card-body">
                            <form action="<?php echo e(route('user.postUser')); ?>" method="POST" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <!-- Username -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Username</div>
                                        <div class="col-md-8" style="text-align: left; margin-bottom: 10px;">
                                        <input type="text" id="name" style="border: solid 1px; width: 215px;" name="name"
                                           required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Email</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="email_address" style="border: solid 1px; width: 215px;"
                                           name="email" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mật khẩu -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Mật khẩu</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="password" id="password" style="border: solid 1px; width: 215px;"
                                           name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">Phone</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="phone" style="border: solid 1px; width: 215px;" name="phone" required>
                                    <?php if($errors->has('phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- mssv -->
                                <div class="form-group mb-2">
                                <div class="row text-center">
                                        <div class="col-md-4" style="">MSSV</div>
                                        <div class="col-md-8" style="text-align: left;">
                                        <input type="text" id="mssv" style="border: solid 1px; width: 215px;" name="mssv" required>
                                    <?php if($errors->has('mssv')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('mssv')); ?></span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- Hinh anh -->
                                <div class="row mb-3">
                                    <label for="avatar"  style=" padding-right: 50px;"class="col-md-4 col-form-label text-md-end"><?php echo e(__('Avatar')); ?></label>
  
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="avatar" value="<?php echo e(old('avatar')); ?>" required autocomplete="avatar">
  
                                        <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <!-- <div>
                                        <label for="avatar">Ảnh đại diện</label>
                                        <input id="avatar" type="file" name="avatar" accept="image/*">
                                    </div> -->
                                </div>

                                <!-- Button -->
                                <div class="row">
                                    <div class="col-md-8" style="text-align: right; margin-top: 6px;">
                                        <a href="#" style="text-align: right; text-decoration: none; font-size: 13px;">Bạn đã có tài khoản?</a>
                                    </div>
                                    <div class="col-md-4" style="padding-left: 5px;">
                                    <div class="" style="text-align: left; ">
                                    <button type="submit" class="btn btn-primary btn-block" style=" margin-left: 11px;">Đăng kí</button>
                                </div>
                                
                                    
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel_Lad7\resources\views/crud_user/create.blade.php ENDPATH**/ ?>