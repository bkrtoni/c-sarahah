<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('inc.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-sm-9">
        <div class="panel panel-default panel-settings">
            <form method="post" class="form-horizontal" action="<?php echo e(url('setting/pass')); ?>">
                <h4>&nbsp;&nbsp;&nbsp;<strong>Change Password</strong></h4>
                <hr />
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="prev">Current Password</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="prev" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for='new'>New Password</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="new"  />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for='con'>New Password Confirmation</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="con"  />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <button type="submit" class="btn mybtn">Change</button>
                    </div>
                </div>
            </form>
        </div>
        <br />
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>