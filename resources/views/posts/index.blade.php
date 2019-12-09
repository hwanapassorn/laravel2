{{-- <ul>
    @foreach ($posts as $post)
    <li>{{$post->title}}</li>
    @endforeach
</ul> --}}


{{-- <ul>
    @foreach ($posts as $post)
    <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>

    <div>
        <img src="/image/{{$post->path}}" height="100">
    </div>
    @endforeach
</ul> --}}

<html>

  <head>
        <body background="/image/1615jgm3hfmy.jpg">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>Heroic Features - Start Bootstrap Template</title>

          <!-- Bootstrap core CSS -->
          <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="/css/heroic-features.css" rel="stylesheet">
        </body>
  </head>


        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg- fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a type="button" class="btn btn-info" href="/">Home

                      </a>
                    </li>

                    <li class="nav-item">
                      <a type="button" class="btn btn-info" href="#">About</a>
                    </li>

                    <li class="nav-item">
                      <a type="button" class="btn btn-info"  href="#">Services</a>
                    </li>

                    <li class="nav-item">
                      <a type="button" class="btn btn-info" href="#">Co</a>
                    </li>

                      {{-- login --}}

                      @if (Route::has('login'))
                        @auth
                            <a type="button" class="btn btn-info" href="{{Auth::logout() }}">logout</a>
                          @else
                          @if (Route::has('register'))
                            <li class="nav-item">
                              <a  type="button" class="btn btn-info" href="{{ route('login') }}">Login</a>
                            </li>

                            {{-- <li class="nav-item">

                                            <a type="button" class="btn btn-info" href="{{ route('register') }}">Register</a>

                            </li> --}}
                            @endif
                        @endauth
                      @endif
                  </ul>
                    {{-- <span class="navbar-text">
                          Navbar text with an inline element
                        </span> --}}
                  </div>
          </div>
        </nav>



        <!-- Page Content -->


          <!-- Jumbotron Header -->

          <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/image/Mozza-23.jpg" class="d-block w-100" alt="" >
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="..." class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="..." class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
          <!-- Page Features -->
          <div class="container">

 <div class="row text-center">
          @foreach ($posts as $post)

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top"src="/image/{{$post->path}}"  alt="" width="600">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                            <button  class="btn btn-dark">
                              <a class="nav-link" href= "/menu">fa </a>
                            </button>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top"src=""  alt="">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                    <div class="card-footer">
                            <button  class="btn btn-dark">
                                 <a class="nav-link" href= "{{route('posts.create')}}">fa </a>
                            </button>
            </div>
                    </div>
                </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
              {{-- <footer class="py-5 bg-dark">
                <div class="container">
                  <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
                </div> --}}
          <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

</html>


