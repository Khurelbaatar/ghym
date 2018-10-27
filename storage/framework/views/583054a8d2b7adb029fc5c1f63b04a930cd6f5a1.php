<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/tv.css">
        


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
  
          <div class="led_shuu">
         
              <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <p><br></p><p><br></p>

             <div class="row">
                <div class="col-md-1"><img src="/images/items3/<?php echo e($item->item->photo); ?>"> </div>
                <div class="col-md-4" style="text-align: right;">    
                    <?php echo e($item->player->country->name); ?> 
                    <img src="/images/flag/<?php echo e($item->player->country->flag); ?>" width="50">
                    <div class="name"><?php echo e($item->player->lname); ?> <b><?php echo e($item->player->fname); ?></div> &nbsp;&nbsp;
                </div>
             </div>

<p><br></p>
             <div class="row">   
                <div class="col-md-1"><?php echo e(($item->d1 + $item->d2)/2 + ($item->d3 + $item->d4)/2); ?> </div>
                <div class="col-md-1" style="margin-left: 70px;" ><?php echo e(calcExecution($item)); ?> </div>
                <div class="col-md-1" style="margin-left: 75px;"><?php echo e($item->l1 + $item->l2 + $item->t1); ?></div>
                <div class="col-md-1" style="margin-left: 50px;"><?php echo e(totalScore($item)); ?></div> 
              </div>   
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
     
    </body>
</html>
