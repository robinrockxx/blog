<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blogger</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                <a class="nav-link" href="index">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bloglist">blog</a>
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
    <section class="banner">
    	<div class="banner-box">
    		<div class="intro-text">
    			<div class="intro-text-box">
		    		<h1>welcome to our blog</h1>
		    		<p>this is a sample </p>
	    		</div>
    		</div>
    		<img src="assets/images/banner.jpg" alt="banner" />
    	</div>
    </section>
    <section class="featured-blog mtb-40">
    	<div class="container">
    		<div class="row">
                @foreach($data as $data)
    			<div class="col-md-4">
    				<div class="blog-box">
    					@php if(!empty($data->image))
            {
             @endphp
             <img src="{{url('/upload/'.$data->image)}}" >
               @php 
            }
              else
            { 
               @endphp
               <p>no image found</p>
               @php
            } 
               @endphp  
                        
    					<h3>{{$data->title}}</h3>
    					<p>by <span>{{$data->title}}</span> on <span>{{$data->created_at}}</span></p>
    					<p>{{$data->description}} </p>
              <input type="hidden" name="id">
    					<a href="{{url('detail/'.$data->id)}}" class="btn btn-danger">Read more...</a> 
                  
                    </div>
    			</div>
                        @endforeach
    			
    			
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
