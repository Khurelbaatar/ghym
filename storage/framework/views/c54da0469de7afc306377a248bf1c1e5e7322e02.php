<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="jumbotron"><h3>All player</h3></div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/player/create')); ?>" class="btn btn-success btn-sm" title="Add New Player">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Player
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th><th>Full name</th><th>ID</th><th>Birth</th><th>Country</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $player; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->fname); ?> <b><?php echo e($item->lname); ?> </b></td><td><?php echo e($item->number); ?></td><td><?php echo e($item->birth); ?></td><td><?php echo e($item->country->name); ?> &nbsp;&nbsp;<img src="/images/flag/<?php echo e($item->country->flag); ?>" width="17"></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/player/' . $item->id)); ?>" title="View Player"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/player/' . $item->id . '/edit')); ?>" title="Edit Player"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="<?php echo e(url('/admin/player' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Player" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $player->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>