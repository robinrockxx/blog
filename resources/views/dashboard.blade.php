<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
    	<div class="container">
	      <a class="navbar-brand" href="index">
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
	            <a class="nav-link" href="bloglist">Blog</a>
	          </li>
	        </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="dashboard" class="nav-link">Admin Dashboard</a>
                </li>
                <li class="nav-item">
                   <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"class="nav-link">logout
                                            
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            </ul>
	      </div>
  		</div>
    </nav>

    <section class="dashboard-wrap mtb-40">
    	<div class="container">
            <div class="body-content">
        		<div class="row">
        			<div class="col-md-3">
                        <div class="dash-left">
                            <ul>
                                <li class="active"><a href="dashboard" class="active">Dashboard</a></li>
                                <li><a href="adminbloglist">Blogs</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="update">UI Edit</a></li>
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"class="nav-link">logout
                                            
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>

                            </ul>
                        </div>   
                    </div>
                    <div class="col-md-9">
                        <div class="dash-right">
                            <h1>Dashboard</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>   
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