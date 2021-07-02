<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="http://invoices.techhut.live/uploads/thumbnail/logo_thumb-100x93.png">
      <title>MaxInvoices &bull; GMS &bull; User Dashboard</title>
      <!-- Bootstrap 4.0-->
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/bootstrap.min.css">
      <!-- Bootstrap 4.0-->
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/bootstrap-extend.css">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/font-awesome.min.css">
      <link href="http://invoices.techhut.live/assets/admin/css/toast.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/bootstrap-tagsinput.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/sweet-alert.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/animate.min.css" rel="stylesheet" />
      <!-- DataTables -->
      <link href="http://invoices.techhut.live/assets/admin/js/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
      <!-- Theme style -->
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/master_style.css">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/admin/css/skins/_all-skins.css">
      <link href="http://invoices.techhut.live/assets/admin/css/bootstrap-datepicker.min.css" rel="stylesheet">
      <link href="http://invoices.techhut.live/assets/admin/css/icons.css" rel="stylesheet">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/css/simple-line-icons.css">
      <link rel="stylesheet" href="http://invoices.techhut.live/assets/front/font/flaticon.css">
      <link href="http://invoices.techhut.live/assets/admin/css/bootstrap-switch.min.css" rel="stylesheet">
      <link href="http://invoices.techhut.live/assets/admin/css/select2.min.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/themify.min.css" rel="stylesheet" />
      <link href="http://invoices.techhut.live/assets/admin/css/bootstrap4-toggle.min.css" rel="stylesheet" />
      <!-- <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet" /> -->
      <style type="text/css">
         .radio input[type="radio"],
         .radio-inline input[type="radio"],
         .checkbox input[type="checkbox"],
         .checkbox-inline input[type="checkbox"] {
         margin-right: -20px !important; 
         }
      </style>
      <!-- Color picker plugins css -->
      <link href="http://invoices.techhut.live/assets/admin/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
      <script type="text/javascript">
         var csrf_token = '9bfe170b7db6ae0f0ea5bc5090107136';
         var token_name = 'csrf_test_name'
      </script>
   </head>
   <body class="hold-transition skin-blue-light sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="#" class="switch_business logo text-centers">
            <span class="logo-lg">
            <img width="40px" src="http://invoices.techhut.live/uploads/thumbnail/logo_thumb-100x93.png" alt="MaxInvoices"> 
            <span>GMS </span>
            </span> 
            <span class="buss-arrow pull-right"><i class="icon-arrow-right"></i></span>
            </a>
            <div class="business_switch_panel animate-ltr" style="display: none;">
               <div class="buss_switch_panel_header">
                  <img width="40px" src="http://invoices.techhut.live/uploads/thumbnail/logo_thumb-100x93.png" alt="MaxInvoices"> 
                  <span class="acc">Your MaxInvoices accounts</span>
                  <span class="business_close pull-right">×</span>
               </div>
               <div class="buss_switch_panel_body">
                  <ul class="switcher_business_menu">
                     <li class="business_menu_item default">
                        <a class="business_menu_item_link" href="http://invoices.techhut.live/admin/profile/switch_business/87532">
                        <span class="business-menu_item_label">
                        GMS                                                  <span class="is_default pull-right"><i class="flaticon-checked text-success"></i></span>
                        </span>
                        </a>
                     </li>
                     <li class="business_menu_item ">
                        <a class="business_menu_item_link" href="http://invoices.techhut.live/admin/profile/switch_business/89641">
                        <span class="business-menu_item_label">
                        Colors                                              </span>
                        </a>
                     </li>
                  </ul>
                  <div class="seperater"></div>
                  <a class="new_business_link" href="http://invoices.techhut.live/admin/business"><i class="icon-briefcase"></i> <span>Manage business</span></a>
                  <a class="new_business_link" href="http://invoices.techhut.live/admin/business/invoice_customize"><i class="flaticon-edit"></i> <span>Invoice Customization</span></a>
                  <a class="new_business_link" href="http://invoices.techhut.live/admin/profile"><i class="flaticon-user-1"></i> <span>Manage profile</span></a>
                  <a class="new_business_link">
                     <i class="icon-logout"></i>
                     <span>
                        <form action="/logout" method="post" id="logout-form">
                           @csrf
                  <a href="#" onclick="document.getElementById('logout-form').submit()"> Logout </a>
                  </form>
                  </span>
                  </a>
               </div>
               <div class="buss_switch_panel_footer">
               </div>
            </div>
            <nav class="navbar navbar-static-top hidden-md">
               <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span> 
               </a>
            </nav>
         </header>
         <aside class="main-sidebar">
            <section class="sidebar mt-10">
               <ul class="sidebar-menu" data-widget="tree">
                  <li class="active">
                     <a href="/dashboard">
                     <i class="flaticon-home-1"></i> <span>Dashboard</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="/settings">
                     <i class="flaticon-time-is-money"></i> <span>Settings</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="/customers">
                     <i class="flaticon-network"></i> <span>Customers</span> 
                     </a>
                  </li>
                  <li class="">
                     <a href="/categories">
                       <i class="flaticon-folder-1"></i> <span>Categories</span>
                     </a>
                   </li>
                   <li class="">
                     <a href="/tax">
                       <i class="flaticon-tax"></i> <span>Tax</span>
                     </a>
                   </li>
                  <li class="">
                     <a>
                        <i class="flaticon-exit"></i> 
                        <form action="/logout" method="post" id="logout-form">
                           @csrf
                     <a href="#" onclick="document.getElementById('logout-form').submit()"> <span>Logout</span> </a>
                     </form>
                     </a>
                  </li>
               </ul>
               <a href="http://invoices.techhut.live/admin/subscription" class="btn btn-info upgrade_btn">
               <i class="fa fa-rocket"></i> <span>Upgrade</span>
               </a>
            </section>
         </aside>
         <div class="content-wrapper">

            @yield('content')

         </div>
         <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
            </div>
         </footer>
         <input type="hidden" class="msg_opps" value="Oops">
         <input type="hidden" class="msg_error" value="Error">
         <input type="hidden" class="msg_success" value="Success!">
         <input type="hidden" class="msg_sorry" value="Sorry!">
         <input type="hidden" class="msg_yes" value="Yes">
         <input type="hidden" class="msg_cancel" value="Cancel">
         <input type="hidden" class="msg_convert" value="Convert">
         <input type="hidden" class="msg_congratulations" value="Congratulation's">
         <input type="hidden" class="msg_send_successfully" value="Send successfully">
         <input type="hidden" class="msg_setup_successfully" value="Setup successfully">
         <input type="hidden" class="msg_something_wrong" value="Something wrong">
         <input type="hidden" class="msg_try_again" value="Try again">
         <input type="hidden" class="msg_valid_user_msg" value="">
         <input type="hidden" class="msg_password_reset_msg" value="">
         <input type="hidden" class="msg_password_reset_success_msg" value="Your Password has been changed Successfully">
         <input type="hidden" class="msg_confirm_pass_not_match_msg" value="Your Confirm Password doesn't Match">
         <input type="hidden" class="msg_old_password_doesnt_match" value="Your Old Password doesn't Match">
         <input type="hidden" class="msg_inserted" value="Inserted Successfully">
         <input type="hidden" class="msg_are_you_sure" value="Are you sure?">
         <input type="hidden" class="msg_applied_successfully" value="Applied Successfully">
         <input type="hidden" class="msg_stop_recurring" value="Stop this recurring invoice">
         <input type="hidden" class="msg_convert_estimate_to_draft_invoice" value="Convert this estimate to a draft invoice?">
         <input type="hidden" class="msg_convert" value="Convert">
         <input type="hidden" class="msg_converted_successfully" value="Converted successfully">
         <input type="hidden" class="msg_data_limit_over" value="Data limit has been over">
         <input type="hidden" class="msg_sending_failed" value="Sending failed">
         <input type="hidden" class="msg_approved_successfully" value="Approved Successfully">
         <input type="hidden" class="msg_not_recover_file" value="You will not be able to recover this file">
         <input type="hidden" class="msg_deleted_successfully" value="Deleted successfully">
         <input type="hidden" class="msg_approve_this_invoice" value="Approve this invoice">
         <input type="hidden" class="msg_set_as_your_primary_business" value="Set as your primary business">
         <input type="hidden" class="msg_want_to_set" value="Want to set">
         <input type="hidden" class="msg_as_your_default_business" value="as your default business?">
         <input type="hidden" class="msg_made_changes_not_saved" value="You have made some changes and it's not saved?">
         <input type="hidden" class="msg_no_data_founds" value="No data founds">
         <input type="hidden" class="msg_del_success" value="Deleted successfully">
         <input type="hidden" class="msg_account_suspend_msg" value="Your account has been suspended!">
         <input type="hidden" class="msg_recurring_date" value="Start date must be lower then the current date">
         <input type="hidden" class="msg_convert_recurring" value="Convert this to a recurring invoice">
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <input type="hidden" id="success" value="">
      <input type="hidden" id="error" value="">
      <input type="hidden" id="base_url" value="http://invoices.techhut.live/">
      <!-- jQuery 3 -->
      <script src="http://invoices.techhut.live/assets/admin/js/jquery3.min.js"></script>
      <!-- popper -->
      <script src="http://invoices.techhut.live/assets/admin/js/popper.min.js"></script>
      <!-- Bootstrap -->
      <script src="http://invoices.techhut.live/assets/admin/js/bootstrap.min.js"></script>
      <!-- Custom js -->
      <script src="http://invoices.techhut.live/assets/admin/js/admin.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/toast.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/bootstrap-tagsinput.min.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/sweet-alert.min.js"></script>
      <!-- Datatables-->
      <script src="http://invoices.techhut.live/assets/admin/js/jquery.dataTables.min.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/dataTables.bootstrap.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/validation.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/jquery.slimscroll.min.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/plugins/ckeditor/ckeditor.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/fastclick.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/template.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/bootstrap-datepicker.min.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/demo.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/select2.min.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/jquery.invoice.js"></script>
      <script src="http://invoices.techhut.live/assets/admin/js/wow.min.js"></script>
      <!-- datatable export buttons -->
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/buttons.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/buttons.flash.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/jszip.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/pdfmake.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/vfs_fonts.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/buttons.html5.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/export_buttons/buttons.print.min.js"> </script>
      <script src="http://invoices.techhut.live/assets/admin/js/bootstrap4-toggle.min.js"> </script>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript">
         $(function() {
             
             var $form         = $(".require-validation");
           $('form.require-validation').bind('submit', function(e) {
             var $form         = $(".require-validation"),
                 inputSelector = ['input[type=email]', 'input[type=password]',
                                  'input[type=text]', 'input[type=file]',
                                  'textarea'].join(', '),
                 $inputs       = $form.find('.required').find(inputSelector),
                 $errorMessage = $form.find('div.error'),
                 valid         = true;
                 $errorMessage.addClass('hide');
          
                 $('.has-error').removeClass('has-error');
             $inputs.each(function(i, el) {
               var $input = $(el);
               if ($input.val() === '') {
                 $input.parent().addClass('has-error');
                 $errorMessage.removeClass('hide');
                 e.preventDefault();
               }
             });
              
             if (!$form.data('cc-on-file')) {
               $('.payment_loader').show();
               $('.payment_btn').prop("disabled", true);
         
               e.preventDefault();
               Stripe.setPublishableKey($form.data('stripe-publishable-key'));
               Stripe.createToken({
                 number: $('.card-number').val(),
                 cvc: $('.card-cvc').val(),
                 exp_month: $('.card-expiry-month').val(),
                 exp_year: $('.card-expiry-year').val()
               }, stripeResponseHandler);
             }
             
           });
               
           function stripeResponseHandler(status, response) {
                 if (response.error) {
                     $('.payment_loader').hide();
                     $('.payment_btn').prop("disabled", false);
         
                     $('.error')
                     .removeClass('hide')
                     .find('.alert')
                     .text(response.error.message);
                     
                     $.toast({
                       heading: 'Error',
                       text: response.error.message,
                       position: 'top-right',
                       loaderBg:'#fff',
                       icon: 'error',
                       hideAfter: 4500
                     });
         
                 } else {
                     var token = response['id'];
                     $form.find('input[type=text]').empty();
                     $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                     $form.get(0).submit();
                     
                 }
             }
              
         });
      </script>
      <!-- datatable export buttons -->
      <script type="text/javascript">
         $(document).ready(function() {
             $('.dt_btn').DataTable( {
                 dom: 'Bfrtip',
                 buttons: [
                     'copy', 'csv', 'excel', 'pdf', 'print'
                 ]
             });
         });
      </script>
      <!-- high charts js-->
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script>
         var incomeData = [0,0,0,0,0,0,0,0,0,0,0,0];
         var expenseData = [0,0,0,0,0,0,0,0,0,0,0,0];
         var incomeAxis = ["Jun 21","May 21","Apr 21","Mar 21","Feb 21","Jan 21","Dec 20","Nov 20","Oct 20","Sep 20","Aug 20","Jul 20"];
         
         Highcharts.chart('incomeChart', {
             chart: {
                 type: 'column'
             },
             credits: {
                 enabled: false
             },
             title: {
                 text: ''
             },
             xAxis: {
                 categories: incomeAxis
             },
             yAxis: {
                 title: {
                     text: ''
                 }
         
             },
             legend: {
                 enabled: true
             },
             plotOptions: {
                 series: {
                     borderWidth: 0,
                     dataLabels: {
                         enabled: true,
                         format: '$ {point.y}'
                     }
                 }
             },
         
             tooltip: {
                 headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                 pointFormat: '<span style="color:{point.color}">{point.name}</span> <b>$ {point.y}</b><br/>'
             },
         
             series: [
                 {
                     name: "Income",
                     data: incomeData,
                     color: '#2568ef'
                 },
                 {
                     name: "Expense",
                     data: expenseData,
                     color: '#67757c'
                 }
             ]
         });
         
         
         
      </script>
      <!-- high charts js end-->
      <script src="http://invoices.techhut.live/assets/admin/js/printThis.js"></script>
      <!-- Color Picker Plugin JavaScript -->
      <script src="http://invoices.techhut.live/assets/admin/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
      <!-- bt-switch -->
      <script src="http://invoices.techhut.live/assets/admin/js/bootstrap-switch.min.js"></script>
      <script type="text/javascript">
         $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
         var radioswitch = function() {
             var bt = function() {
                 $(".radio-switch").on("switch-change", function() {
                     $(".radio-switch").bootstrapSwitch("toggleRadioState")
                 }), $(".radio-switch").on("switch-change", function() {
                     $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                 }), $(".radio-switch").on("switch-change", function() {
                     $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                 })
             };
             return {
                 init: function() {
                     bt()
                 }
             }
         }();
         $(document).ready(function() {
             radioswitch.init()
         });
      </script>
      <!-- Style switcher -->
      <script src="http://invoices.techhut.live/assets/admin/js/jQuery.style.switcher.js"></script>
      <script type="text/javascript"></script>
      <script>
         ! function(window, document, $) {
             "use strict";
           $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
         }(window, document, jQuery);
         
         $(document).ready(function() {
             $('.datatable').dataTable();
             $('.multiple_select').select2();
             $('.single_select').select2();
         });
      </script>
      <script type="text/javascript">
         jQuery('.datepicker').datepicker({
             format: 'yyyy-mm-dd'
         });
         
         //colorpicker start
         $('.colorpicker-default').colorpicker({
             format: 'hex'
         });
         $('.colorpicker-rgba').colorpicker();
         
      </script>
      <script>
         CKEDITOR.replace('ckEditor', {
             language: 'en',
             filebrowserImageUploadUrl: "http://invoices.techhut.live/admin/post/upload_ckimage_post?key=kgh764hdj990sghsg46r"
         });
      </script>
   </body>
</html>