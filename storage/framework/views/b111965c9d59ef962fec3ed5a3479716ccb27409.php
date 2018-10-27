<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/mnb.css">

    </head>
    <body>

                           <?php
                                        function totalScore($obj){
                                            $difficulty = ($obj->d1 + $obj->d2)/2 + ($obj->d3 + $obj->d4)/2;
                                            $execution = calcExecution($obj);
                                            $penalties = $obj->l1 + $obj->l2 + $obj->t1 + $obj->total;
                                            return $difficulty + $execution - $penalties;
                                        }

                                        function calcExecution($obj){                                    
                                            return 10 - (getArt($obj) + getExe($obj));
                                        }

                                        function getExe($obj){
                                            $execArray = array($obj->e3, $obj->e4, $obj->e5, $obj->e6);
                                            sort($execArray);
                                            return ($execArray[1] + $execArray[2])/2;
                                        }

                                        function getArt($obj){
                                            return ($obj->e1 + $obj->e2)/2;
                                        }
                                    ?>
      <div class="container">
        <div class="row">
          <div id="mnb">

            <div id="score_mnb">
              
                  <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if( $item->publish === 1): ?>

                        <table class="title">
                            <tr>
                              <td class="flag" width="200"><?php echo e($item->player->country->name); ?> <img src="/images/flag/<?php echo e($item->player->country->flag); ?>" width="40"></td>
                              <td class="name" width="760"><?php echo e(strtoupper($item->player->lname)); ?> <?php echo e(strtoupper($item->player->fname)); ?></td>
                              <td><img src="/images/items/<?php echo e($item->item->photo); ?>" width="30"></td>
                            </tr>
                        </table>
                            
                        <table id="table">
                            <tr><td>1</td>
                                <td><?php echo e(($item->d1 + $item->d2)/2 + ($item->d3 + $item->d4)/2); ?></td>
                                <td><?php echo e(calcExecution($item)); ?></td>
                                <td><?php echo e($item->l1 + $item->l2 + $item->t1); ?></td>
                                <td><?php echo e(totalScore($item)); ?></td>
                            </tr>
                        </table>
                      <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
        
          </div>
        </div>
      </div>
    </body>
</html>



