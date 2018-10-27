<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/sps.css">
        


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
          <div class="led">
              @foreach( $points as $item )
                  @if ( $item->publish === 1)
                  <div>&nbsp;&nbsp;{{ $item->player->country->name }} 
                       <img src="/images/flag/{{ $item->player->country->flag }}" width="50">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
                       {{ $item->player->lname }} <b>{{ $item->player->fname }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <img src="/images/items/{{ $item->item->photo }}">  
                  </div>
                  
                  <div class="score"> &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{ ($item->d1 + $item->d2)/2 + ($item->d3 + $item->d4)/2 }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ calcExecution($item) }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $item->l1 + $item->l2 + $item->t1}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ totalScore($item) }}    {{ number_format($item->t1, 2) }}
                  </div>

                  &nbsp;&nbsp;&nbsp;&nbsp;
                @endif
              @endforeach
          </div>
        </div>
      </div>
    </body>
</html>
