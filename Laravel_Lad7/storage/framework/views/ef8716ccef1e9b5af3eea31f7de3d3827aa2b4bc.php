
<style>
   .manHinh{
    text-align: center;
    margin: 25px 0px;

   }
   .row{
    text-align: left;

   }
   .chiTiet{
    border: 1px solid #000;
    width: 50%;
    height: 70%;
    margin: auto ;
   }
   .row .col-md-4{
    padding-left: 50px ;
   }
   .row .col-md-8{
    padding-left: 36px ;
    font-weight: bold;
   }
   .chiTiet .chinhSua{
        padding: 15px 15px;
        background: blue;
        margin-bottom: 20px ;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px ;
        margin-left: 390px ;
     display: inline-block;

   }

</style>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="chiTiet">
        <h5  class="manHinh">Màn hình chi tiết</h5>

     <div class="row">
        <div class="col-md-4">
        <p>Id</p>
        <p> Username</p>
        <p> Email</p>
        <p>Phone</p>
        <p>MSSV</p>
        <p>Avatar</p>
        </div>
        <div class="col-md-8">
        <p><?php echo e($user->id); ?></p>
        <p><?php echo e($user->name); ?></p>
        <p><?php echo e($user->email); ?></p>
        <p><?php echo e($user->phone); ?></p>
        <p><?php echo e($user->mssv); ?></p>
        <img src="<?php echo e(asset('avatar/'.$user->avatar)); ?>" width="100px" height="100px" alt="avatar">
        </div>
      </div>

      <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>" class="chinhSua">Chỉnh sửa</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <h4>Profile (1-1)</h4>
        First name : <?php echo e($user->profile->first_name); ?> <br>
        Last name : <?php echo e($user->profile->last_name); ?> <br>
    </div>

    <div class="row">
        <h4>Danh sách bài viết đã viết (1 - N)</h4>
        <table>
            <thead>
                <th>ID</th>
                <th>Post name</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->post_id); ?></td>
                    <td><?php echo e($post->post_name); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <h4>Danh sách sở thích (N-N)</h4>
        <table>
            <thead>
            <th>ID</th>
            <th>Favorite</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $user->favorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($favorite->favorite_id); ?></td>
                    <td><?php echo e($favorite->favorite_name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel_Lad7\resources\views/crud_user/read.blade.php ENDPATH**/ ?>