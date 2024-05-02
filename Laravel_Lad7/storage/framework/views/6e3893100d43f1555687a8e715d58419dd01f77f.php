
<style>
  .error-message {
    color: red;
}
</style>
<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="<?php echo e(route('user.postUpdateUser')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input name="id" type="hidden" value="<?php echo e($user->id); ?>">
                                <!-- <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="<?php echo e($user->name); ?>"
                                           required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="<?php echo e($user->email); ?>"
                                           name="email" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"  value="<?php echo e($user->phone); ?>" required>
                                    <?php if($errors->has('phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                    <?php endif; ?>
                                </div> -->
                                <div class="row">
                                <div class="col-md-4" style="text-align: center">
                                        <p style="margin-top:20px">User name</p>
                                        <p style="margin-top:35px">Email</p>
                                        <p style="margin-top:28px">Nhập lại mặt khẩu</p>
                                        <p style="margin-top:30px">SDT</p>
                                        <p style="margin-top:30px">MSSV</p>
                                    </div>
                                <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Name" id="name" class="form-control" name="name"
                                           value="<?php echo e($user->name); ?>"
                                           required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Email" id="email_address" class="form-control"
                                           value="<?php echo e($user->email); ?>"
                                           name="email" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="Phone" id="phone" class="form-control" name="phone"  value="<?php echo e($user->phone); ?>" required>
                                    <?php if($errors->has('phone')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" style="border: solid 1px; width: 250px; margin-top:15px;" placeholder="MSSV" id="mssv" class="form-control" name="mssv"  value="<?php echo e($user->mssv); ?>" required>
                                    <!-- <?php if($errors->has('mssv')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('mssv')); ?></span>
                                    <?php endif; ?> -->
                                    <?php if($errors->has('mssv')): ?>
                                     <span class="error-message"><?php echo e($errors->first('mssv')); ?></span>
                                    <?php endif; ?>
                                </div>
                                </div>
                                </div>

                                <!-- Hinh anh -->
                                <div class="row mb-3">
                                    <label for="avatar" style="padding-right: 58px;" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Avatar')); ?></label>
  
                                    <div class="col-md-6">
                                        <input id="avatar"  type="file" class="form-control <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="avatar" value="<?php echo e(old('avatar')); ?>" required autocomplete="avatar">
                                        <img src="<?php echo e(asset('avatar/'.$user->avatar)); ?>" width="70px" height="70px" alt="avatar">
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

                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-8" style="text-align: right; margin-top: 6px; margin-left:">
                                        <a href="http://127.0.0.1:8000/login" style="text-align: right; text-decoration: none; font-size: 13px;">Đã có tài khoản</a>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="" style="text-align: right; margin-right: 50px">
                                    <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
                                </div>

                              
                            </form> 
                            
                        </div>
                        <!-- <div class="d-grid mx-auto">
                            <a href="<?php echo e(route('user.list')); ?>" class="btn btn-dark btn-block">Back</a>
                      </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel_Lad7\resources\views/crud_user/update.blade.php ENDPATH**/ ?>