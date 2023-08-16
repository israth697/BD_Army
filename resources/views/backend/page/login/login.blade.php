
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/login/css/bootstrap.min.css')}}
">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{url('/login/css/style.css')}}">

    <title>Admin Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{url('/login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
            </div>
            <form action="{{route('admin.do.login')}}" method="post">
            @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                
              </div>
              
              
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>

            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
<!-- {{url('/login/')}} -->
  
    <script src="{{url('/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('/login/js/popper.min.js')}}"></script>
    <script src="{{url('/login/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/login/js/main.js')}}"></script>
  </body>
</html>