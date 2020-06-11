<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Create Blog</title>

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
                                <li><a href="admin-blog-list">Blogs</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>   
                    </div>
                    <div class="col-md-9">
                        <div class="dash-right">
                            <div class="dash-header">
                              <div class="dash-title">
                                  <h1>Create Blog</h1>
                              </div>
                            </div>
                            <div class="blog-form">
                              <form action="{{ url('update_blog')}}" method="post" enctype="multipart/form-data">

                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="form-group form-row">
                                    <label class="col-md-3">Title <span class="required">*</span></label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" value="{{$data->title}}" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Category <span class="required">*</span></label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" value="{{$data->category}}" name="category" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                  <label class="col-md-3">Is Featured</label>
                                  <div class="col-md-9">
                                    <input type="radio" name="is_featured" value="1"@if($data->is_active=='1') Yes checked @endif>
                                    <input type="radio" name="is_featured" value="0"@if($data->is_active=='0') No checked @endif>
                                  </div>
                                </div>
                                <div class="form-group form-row">
                                  <label class="col-md-3">Is Active</label>
                                  <div class="col-md-9">
                                    <input type="radio" name="is_active" value="1 "@if($data->is_active=='1') Yes checked @endif>
                                    <input type="radio" name="is_active" value="0 "@if($data->is_active=='0') No checked @endif>
                                  </div>
                                </div>
                                <div class="form-group form-row">
                                  <label class="col-md-3">Upload Image</label>
                                  <div class="col-md-9">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                                  </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3">Description <span class="required">*</span></label>
                                    <div class="col-md-9">
                                      <textarea name="description" rows="5" class="form-control" value="{{$data->description}}" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-primary">UPDATE</button>
                                    </div>
                                </div>
                              </form>
                            </div>
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
