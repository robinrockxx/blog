<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog List</title>

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
                  <a href="login" class="nav-link">Logout</a>
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
                                <li class="active"><a href="dashboard">Dashboard</a></li>
                                <li><a href="adminbloglist" class="active">Blogs</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Pages</a></li>
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
                            <div class="dash-header">
                                <div class="dash-title">
                                    <h1>Blogs</h1>
                                </div>
                                <div class="dash-nav">
                                    <a href="blogform" class="btn btn-success">Add Post</a>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped">
                               <tr>

                                
                                    <th>#ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Posted On</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($data as $data)
                                <tr>
                                    
                                    <td>{{$data->id}}</td>
                                    <td>@php if(!empty($data->image))
            {
             @endphp
             <img src="{{url('/upload/'.$data->image)}}" style="height: 60px;width: 78px;">
               @php 
            }
              else
            { 
               @endphp
               <p>no image found</p>
               @php
            } 
               @endphp
         </td>
                                     
                                        

                                <td>{{$data->title}}</td>
                                <td>{{$data->category}}</td>
                                <td>{{$data->created_at}}</td>
                                

                               
                                
                                    <td>
                                        <a href="{{url('/editblog/'.$data->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{url('/delete/'.$data->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    @endforeach
                                </tr>

                               
                            </table>
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
