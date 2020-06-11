<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <base href="localhost/laravel/public"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blog Detail</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('js/jquery.min.js') }}"> </script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
        <div class="container">
          <a class="navbar-brand" href="{{url('index')}}">
            <img src="{{ asset('assets/images/logo.png')}}" alt="Angular Project" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('bloglist')}}">Blog</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="{{url('login')}}" class="nav-link">Login</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <section class="blog-detail mtb-40">
        <div class="container">
            <div class="row">
                @foreach($robin as $robin)
                <div class="col-md-8">
                    <div class="blog-left">
                        <h1>{{$robin->title}}</h1>
                        <div class="posted-on">
                            <p>by <span>{{$robin->title}}</span> on <span>{{$robin->created_at}} </span></p>
                        </div>
                        <div class="detail-img" >
                           @php if(!empty($robin->image))
            {
             @endphp
             <img src="{{url('/upload/'.$robin->image)}}" style="height: 730px; width: 700px; " >
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                
                <div class="col-md-4">
                    <div class="blog-right">
                        <div class="right-widget recent-post">
                            <h3>Recent Blogs</h3>
                             @foreach($data as $data)
                            <a href="{{url('/detail/'.$data->id)}}">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        @php if(!empty($data->image))
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
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>{{$data->title}}</h4>
                                        <p>Posted On: {{$data->created_at}}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            
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
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  </body>
</html>
