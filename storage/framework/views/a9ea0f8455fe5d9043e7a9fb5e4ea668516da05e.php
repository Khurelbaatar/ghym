<?php $__env->startSection('content'); ?>

                                    <?php
                                        function totalScore($obj){
                                            $difficulty = ($obj->d1 + $obj->d2)/2 + ($obj->d3 + $obj->d4)/2;
                                            $execution = calcExecution($obj);
                                            $penalties = $obj->l1 + $obj->l2 + $obj->t1 + $obj->total;
                                            return $difficulty + $execution - $penalties;
                                        }

                                        function calcExecution($obj){
                                            $val1 = ($obj->e1 + $obj->e2)/2;
                                            $execArray = array($obj->e3, $obj->e4, $obj->e5, $obj->e6);
                                            sort($execArray);
                                            $val2 = ($execArray[1] + $execArray[2])/2;
                                            return 10 - ($val1 + $val2);
                                        }
                                    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                
            <p><br></p>
                <div class="card">
                    <a href="/admin/point/create" class="btn btn-primary">new</a>
                    <div class="card-body">
                     
                        

                        <div class="col-md-1">
                            <p><br></p>
                        </div>
                        <div class="col-md-6">

        
                            <!--
                            <form method="GET" action="<?php echo e(url('/admin/point')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form> -->
                        </div>

                        <div class="col-md-2">
                            <select class="form-control">
                                <option id="1">Senior individual</option>
                                <option id="2">Junior individual</option>
                                <option id="3">Senior group</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option id="1">Hoop</option>
                                <option id="2">Ball</option>
                                <option id="3">Clubs</option>
                                <option id="4">Ribbon</option>
                            </select>
                        </div>
                        <div class="col-md-1"><button class="btn button">ok</button></div>
              <p><br/></p><p><br/></p>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>D1</th>
                                        <th>D2</th>
                                        <th>D3</th>
                                        <th>D4</th>
                                        <th>E1</th>
                                        <th>E2</th>
                                        <th>E3</th>
                                        <th>E4</th>
                                        <th>E5</th>
                                        <th>E6</th>
                                        <th>L1</th>
                                        <th>L2</th>
                                        <th>T1</th>
                                        <th>C</th>
                                        <th>Total</th>
                                        <th>Rank</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $point; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="score_table">
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->player->lname); ?> <b><?php echo e($item->player->fname); ?></b></td>
                                        <td><img src="/images/items1/<?php echo e($item->item->photo); ?>" width="20"></td>
                                        <td style="background-color: #b3fbff"><?php echo e($item->d1); ?></td>
                                        <td style="background-color: #b3fbff"><?php echo e($item->d2); ?></td>
                                        <td style="background-color: #b3fbff"><?php echo e($item->d3); ?></td>
                                        <td style="background-color: #b3fbff"><?php echo e($item->d4); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e1); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e2); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e3); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e4); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e5); ?></td>
                                        <td style="background-color: #ffdab3"><?php echo e($item->e6); ?></td>
                                        <td style="background-color: #fff478">-<?php echo e($item->l1); ?></td>
                                        <td style="background-color: #fff478">-<?php echo e($item->l2); ?></td>
                                        <td style="background-color: #fff478">-<?php echo e($item->t1); ?></td>
                                        <td style="background-color: #fff478">-<?php echo e($item->total); ?></td>
                                        <td style="background-color: #ff6f60"><b><?php echo e(totalScore($item)); ?> 
                                        </b></td>
                                        <td> <?php echo e($item->rank); ?></td>
                                        
                                        <td>
                                            <a href="<?php echo e(url('/admin/point/' . $item->id)); ?>" title="View Point"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/point/' . $item->id . '/edit')); ?>" title="Edit Point"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        </td>
                                    </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $point->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>