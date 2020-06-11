
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo.png" alt="Angular Project" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="login" class="nav-link">Login</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <section class="login-wrap mtb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-box">
                        <h1>Administrator Login</h1>
                         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>

                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="/register"> Sign Up Here</a></p>
                                </div>
                        </div>
                    </form>
                    </div>         
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="copyright">
                <div>Designed by RSGiTECH</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>


