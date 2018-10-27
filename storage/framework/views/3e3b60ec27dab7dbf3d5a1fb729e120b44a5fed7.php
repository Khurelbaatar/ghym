<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
               <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="/player">Player</a>
                  </li> 
                 <!--  <li>
                    <a href="/admin/category">Category</a>
                  </li> 
                  <li>
                    <a href="/admin/player">Players</a>
                  </li> 
                  <li>
                    <a href="/admin/country">Country</a>
                  </li> 
                  <li>
                    <a href="/admin/point">Point</a>
                  </li> -->
                </ul>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> 
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

      <div class="container">
        <div class="row">
            
          <p><br></p>
            <div class="col-md-12">
              <img src="/images/logo_ad.png">
            </div>
            <div class="col-md-12">
              <p><br></p><p><br></p>
              <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Senior individual</a></li>
                <li role="presentation"><a href="#">Senior group</a></li>
                <li role="presentation"><a href="#">Junior individual</a></li>
              </ul>
                
                
                <table class="table table-striped"> 
                  <thead> <tr> <th>#</th> <th>Name</th> <th>ID</th> <th>Country</th></tr> </thead> 
                  <tbody> 
                    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr> <th scope="row"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></th> 
                          <td><a href="<?php echo e(url('/player/' . $item->id)); ?>"><?php echo e($item->lname); ?> <b><?php echo e($item->fname); ?></b></a></td> 
                          <td><?php echo e($item->number); ?></td> 
                          <td><?php echo e($item->country->name); ?> &nbsp;&nbsp;<img src="/images/flag/<?php echo e($item->country->flag); ?>" width="17"></td> 
    
                        </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </body>
</html>
