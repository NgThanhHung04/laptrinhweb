
<style>
    .danhSach{
        text-align: center;
        margin-bottom: 20px ;
    }
   table thead tr th{
        border: 1px solid #000;
        text-align: center;
    }
    table tbody tr th {
        border-left: 1px solid #000;
        border-right: 1px solid #000;
        font-weight: normal;
        
    }
    table {
        border: 1px solid #000;
        margin-bottom: 70px ;
    }
    table tbody tr th a{
        text-decoration: none;
         color: black;
       
    }
    .link {
        text-align: center;
        position: absolute;
        /* top: 150%; */
        left: 45%;

    }
</style>
<?php $__env->startSection('content'); ?>
<h5 class="danhSach">Danh sách user</h5>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>MSSV</th>
                            <th>Avatar</th>
                            
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th style="text-align: center;"><?php echo e($user->id); ?></th>
                                <th><?php echo e($user->name); ?></th>
                                <th><?php echo e($user->email); ?></th>                               
                                <th><?php echo e($user->phone); ?></th>
                                <th><?php echo e($user->mssv); ?></th>
                                <th> <img src="<?php echo e(asset('avatar/'.$user->avatar)); ?>" width="70px" height="70px" alt="avatar"></th>
                                <th>
                                    <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>"   >View</a> |
                                    <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>" >Edit</a> |
                                    <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>" >Delete</a> 
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center;" class="link"><?php echo e($users->links()); ?></div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel_Lad7\resources\views/crud_user/list.blade.php ENDPATH**/ ?>