<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('inc.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="col-sm-9">
    <div class="panel panel-default panel-settings" style=''>
        <div style='margin-left:20px;'>
            <h2>Remove account</h2>
            <br />
            <div>
                <div class="alert alert-danger" role="alert">
                    <h5><strong>Are you sure that you want to delete your account?</strong></h5>
                    <h5><strong>Deleting the account is irreversible!</strong></h5>
                </div>
                <form action="<?php echo e(url('setting/delete')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div style='margin-bottom:20px;'>
                        <br />
                        <a class="btn mybtn" href="<?php echo e(url('messages')); ?>">Cancel</a> &nbsp;
                        <input type="submit" value="Remove" class="btn mybtn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br />
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>