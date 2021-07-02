
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://invoices.techhut.live/assets/images/favicon.ico"> 
        <title>MaxInvoices - Login</title>
  
    <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/bootstrap-extend.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/master_style.css">
    <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/css/fontawesome.min.css">
    <link href="http://invoices.techhut.live/assets/admin/css/sweet-alert.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap', 'Quicksand:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
    <style type="text/css">
      body{
        font-family: Alata, 'sans-serif';
      }
    </style>
</head>

<body class="hold-transition login-page">

<div class="auth-box">

  <div class="login-box">
    <div class="login-logo" data-aos="fade-up" data-aos-duration="300">
              <a href="/"><img width="50%" class="circles" src="http://invoices.techhut.live/uploads/medium/logo_medium-400x77.png"></a><br>
          </div>
    
    <!-- /.login-logo -->
    <div id="login-area" class="login-box-body" data-aos="fade-up" data-aos-duration="400">
      <p class="login-box-msg">Sign in</p>
      <form id="login-form" method="post" action="/login">

        @csrf

        @if(session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif

        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control log" placeholder="Username or email" required>
          <span class="ion ion-email form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control log" placeholder="Password" required>
          <span class="ion ion-locked form-control-feedback"></span>
          <a class="pull-right forgot_pass" href="#">Forgot password?</a>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-info btn-block margin-top-10 signin_btn">Sign in</button> 
            <a class="create" href="/register">Create Account</a>
          </div> 
        </div>
      </form>
      <!-- /.social-auth-links -->

      <div class="margin-top-30 text-center">
      </div>

    </div>
    <!-- /.login-box-body -->
      
      <!-- /.social-auth-links -->

      <div class="margin-top-30 text-center">
      </div>
    </div> -->
  </div>


</div>
<!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="http://invoices.techhut.live/assets/admin/js/jquery.min.js"></script> 
  <!-- popper -->
  <script src="http://invoices.techhut.live/assets/admin/js/popper.min.js"></script>
  <!-- Bootstrap 4.0-->
  <script src="http://invoices.techhut.live/assets/admin/js/bootstrap.min.js"></script>
  <script src="http://invoices.techhut.live/assets/admin/js/admin.js"></script>
  <script src="http://invoices.techhut.live/assets/admin/js/sweet-alert.min.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  

</body>
</html>
