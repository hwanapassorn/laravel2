

<html>

<head>
        <body background="/image/qw.jpg">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">CHESSE & COLD CUT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="btn btn-drak" href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>





<body>
              </ul>

            </div>
          </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

          <!-- Jumbotron Header -->


          <!-- Page Features -->









          <div class="row text-center">

          @foreach ($menu as $post)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top"src="/image/{{$post->path}}"  alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">{{$post->content}}</p>
                    </div>
                    <div class="card-footer">
                            <button  class="btn btn-dark">
                                    <a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>
                                {{-- <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>as --}}
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

