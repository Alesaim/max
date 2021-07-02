<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>MaxInvoices - Your Business. Your Clients. Powerful Invoicing Platform.</title>
      <meta charset="utf-8">
      <meta name="author" content="MaxInvoices">
      <meta name="description" content="Save time and get paid faster with invoice and send automatic payment reminders to secure your cashflow.">
      <meta name="keywords" content="saas,finincial software,accounting software">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#056EB9" />
      <meta name="msapplication-navbutton-color" content="#056EB9" />
      <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />
      <!-- Favicons
         ================================================== -->
      <link rel="icon" href="http://invoices.techhut.live/uploads/thumbnail/logo_thumb-100x93.png">
      <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
      <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
      <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/bootstrap.min.css">
      <!-- styles
         ================================================== -->
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/css/cristal.min.css" type="text/css">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/css/style.min.css" type="text/css">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/font-awesome.min.css">
      <link href="http://invoices.techhut.live/assets/admin/css/toast.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/sweet-alert.css" rel="stylesheet" />
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/css/simple-line-icons.css">
      <link href="http://invoices.techhut.live/assets/front/css/select2.min.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/front/css/aos.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Alata&display=swap', 'Quicksand:300,400,700&display=swap" rel="stylesheet">
      <!--  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet"> -->
      <script type="text/javascript" src="http://invoices.techhut.live/assets/front/js/device.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
   </head>
   <body>
      <div>
      <!-- start header -->
      <!-- end header -->
      <div class="spacer py-12"></div>
      <!-- start main -->
      <main role="main">
         <section class="section p-0 mt--50">
            <div class="container">
                <div class="row">  

                <form id="register_form" class="authorization__form authorization__form--shadow leave_con" method="post" action="/register" >
                     @csrf
                     <h4 class="__title">Sign Up</h4>
                     <div class="input-wrp">
                        <input class="textfield textfield--grey" type="text" name="name" placeholder="Full name" required />
                     </div>
                     <div class="input-wrp">
                        <input class="textfield textfield--grey" type="email" name="email" placeholder="Email" required />
                     </div>
                     <div class="input-wrp">
                        <input class="textfield textfield--grey" type="password" name="password" placeholder="Password" required />
                     </div>
                     
                     <div class="text-center">
                        <button class="custom-btn custom-btn--medium custom-btn--style-2 wide submit_btn mb-4" type="submit">Sign Up </button>
                        <a class="create" href="/login">Sign in</a>
                     </div>
                  </form>           
               
                </div>
            </div>
         </section>
      </main>
   </body>
</html>