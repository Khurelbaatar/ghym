<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhythmic Gymnastics Asian Cup 2018</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>

        .insert_point{
            text-align: center;
            margin-bottom: 20px;
            color: #d60694;
            font-weight: bold;
        }


        </style>


    </head>
    <body>
      <div class="container">
        <div class="row">
            
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
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
          <div class="col-md-3"></div>
          <div class="col-md-6">
              <p><br></p> <p><br></p>
              <div class="table-responsive">
                <table class="table">
                   <tbody>
                            <tr><th>  </th><td> </td></tr>
                            <tr><th> Last Name </th><td> {{ $player->lname }} </td></tr>
                            <tr><th> First Nname </th><td> {{ $player->fname }} </td></tr>
                            <tr><th> Country </th><td>  {{ $player->country->name }}&nbsp;&nbsp; </td></tr>
                            <tr><th> ID </th><td> {{ $player->number }} </td></tr>
                            <tr><th> Birth</th><td> {{ $player->birth}} </td></tr> 
                        </tbody>
                </table>
            </div>
          </div>
        </div>
        <p><br></p>
      
        <div class="insert_point"><h3>INSERT POINT</h3></div>
     
        <div class="row">

            <form method="post" action="/point">
                <div class="col-md-4"></div>
                <div class="col-md-2 .col-md-offset-9">
                    <select class="form-control" name="item_id">
                        <option id="1">Hoop</option>
                        <option id="2">Ball</option>
                        <option id="3">Clubs</option>
                        <option id="4">Ribbon</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <input type="text" class="form-control" name="form_point" placeholder="insert point">
                </div>
                <div class="col-md-1">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <input type="hidden" name="player_id" value="{{ $player->id }}">
                    <input type="submit" class="btn btn-primary" value="Send">
                </div>
            </form>

        </div>
      </div>
    </body>a
</html>
