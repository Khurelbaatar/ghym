<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>
                            </li>
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
                        @endif
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
                    @foreach( $players as $item )
                        <tr> <th scope="row">{{ $loop->iteration or $item->id }}</th> 
                          <td><a href="{{ url('/player/' . $item->id) }}">{{ $item->lname }} <b>{{ $item->fname }}</b></a></td> 
                          <td>{{ $item->number }}</td> 
                          <td>{{ $item->country->name }} &nbsp;&nbsp;<img src="/images/flag/{{ $item->country->flag }}" width="17"></td> 
    
                        </tr> 
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </body>
</html>
