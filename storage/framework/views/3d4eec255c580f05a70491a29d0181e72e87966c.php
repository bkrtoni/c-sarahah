<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="panel panel-default panel-profile m-b-md">
        <div class="panel-body text-center">

            <img data-toggle="modal" id="ProfilePhoto" data-target="#photoModal" class="img-circle" style="cursor: pointer;width:170px" src="../storage/photo/<?php echo e($user->photo); ?>" />
            <br><br>
            <h5 class="panel-title">
                <span class="text-inherit">
                    <a href="../setting" class='myLink'><span style="font-size:medium" class="glyphicon glyphicon-wrench"> </span></a> baker alharoun</span>
            </h5>


            <br />
            <span class="text-inherit" style="font-weight:bold"><a href="../user/<?php echo e($user->username); ?>"><?php echo e(url('user/'.$user->username)); ?></a></span>
        </div>
    </div>
</div>



<div class="col-md-12">
    <div class="text-center media list-group-item p-a">
        <span style="font-size: x-large" class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<span style="font-size: x-large">Messages</span>

    </div>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="received">
				<ul class="list-group media-list media-list-stream no-round" id="posts">
					<?php if(count($user->msgs)==0): ?>
						<div class="media list-group-item p-a" style="border-top: none"><span>You don&#x27;t have any messages...Share your page!</span></div>
					<?php endif; ?>
					<?php $__currentLoopData = $user->msgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="media list-group-item"  style="border-top: none" >
                        <div class="media-body">
                            <span style="padding-bottom: 5px;" class="pull-right close" onclick="event.preventDefault();document.getElementById('del-msg').submit();" aria-hidden="true">&times;</span>
                            <span style="padding-bottom: 5px; padding-right: 10px; font-size: large" class="pull-right"></span>
                            <span style="white-space: pre-wrap; word-wrap: break-word; white-space: pre-line; overflow: hidden; display: block;"><?php echo e($msg->msg); ?></span><br />
                            <small class="text-muted">
                                <?php echo e($msg->created_at); ?>&nbsp;
                            </small>
                            <form id="del-msg" action="<?php echo e(url('messages')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>


                            <input type='hidden' name='_method' value='DELETE'>
                            <input type='hidden' name='msgid' value='<?php echo e($msg->id); ?>'>
                        </form>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	</ul>

            <br />
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>