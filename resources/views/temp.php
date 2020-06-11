<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog Detail</title>

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
                  <a href="login" class="nav-link">Login</a>
                </li>
            </ul>
	      </div>
  		</div>
    </nav>
    <section class="blog-detail mtb-40">
    	<div class="container">
    		<div class="row">
                @foreach($data as $data)
    			<div class="col-md-8">
    				<div class="blog-left">
                        <h1>{{$data->title}}</h1>
                        <div class="posted-on">
                            <p>by <span>{{$data->title}}</span> on <span>{{$data->created_at}} </span></p>
                        </div>
                        <div class="detail-img">
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
                        </div>
                        <div class="blog-desc">
        					<p> {{$data->description}} {{$data->description}}{{$data->description}}Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                        </div>
    				</div>
                    @endforeach
    			</div>

                
    			<div class="col-md-4">
    				<div class="blog-right">
                        <div class="right-widget recent-post">
                            <h3>Recent Blogs</h3>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img1.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 1</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img2.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 2</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img3.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 3</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img4.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 4</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img5.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 5</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                         <div class="right-widget categories">
                             <h3>Categories</h3>
                             <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Opinion</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Style</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
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
