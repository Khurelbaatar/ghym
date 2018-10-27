<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.css">

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
                  <thead> <tr> <th>#</th> <th>Name</th> <th>Country</th><th>Item</th><th>Hoop</th></tr> </thead> 
                  <tbody> 
                    @foreach( $points as $item )

                        @if ( $item->publish === 1)
                        <tr> <th scope="row">{{ $loop->iteration or $item->id }}</th> 
                          <td>{{ $item->player->lname }} <b>{{ $item->player->fname }}</b></td> 
                          <td>{{ $item->player->country->name }} &nbsp;&nbsp;<img src="/images/flag/{{ $item->player->country->flag }}" width="17"></td> 
                           <td><img src="/images/items1/{{ $item->item->photo }}" width="20"></td>
                          
                          <td>{{ totalScore($item) }}</td> 
          
                        </tr> 

                        @endif
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </body>
</html>
