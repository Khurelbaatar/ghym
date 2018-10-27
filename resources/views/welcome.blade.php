<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        


    </head>
    <body class="body_color">
          <div class="container">
              <div class="row">
                  <div class="col-md-12"> <p><br></p><p><br></p><p><br></p></div>
              </div>
              <div class="row">
                  <div class="col-sm-6 col-md-6"><img src="/images/11.png" class="img-responsive"></div>
                  <div class="col-sm-6 col-md-6 ">

                      <form class="form-signin" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <select class="form-control" name="email">
                              <option>Select judge</option>
                              <option>d1@gmail.com</option>
                              <option>d2@gmail.com</option>
                              <option>d3@gmail.com</option>
                              <option>d4@gmail.com</option>
                              <option>e1@gmail.com</option>
                              <option>e2@gmail.com</option>
                              <option>e3@gmail.com</option>
                              <option>e4@gmail.com</option>
                              <option>e5@gmail.com</option>
                              <option>e6@gmail.com</option>
                              <option>l1@gmail.com</option>
                              <option>l2@gmail.com</option>
                              <option>t1@gmail.com</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                      </form>
                  </div>
              </div>
            
          </div>
    </body>
</html>
