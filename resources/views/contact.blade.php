@extends('layout.main');

@section('content');

<!-- start main -->
<main role="main">
   <section class="section">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
               <h2>Get in touch</h2>
               <form method="post" action="https://invoicem-nofb8.ondigitalocean.app/home/send_message">
                  <div class="row">
                     <div class="col-12 col-md-6">
                        <div class="input-wrp">
                           <input class="textfield textfield--grey" placeholder="Full name" name="name" type="text" />
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="input-wrp">
                           <input class="textfield textfield--grey" placeholder="Email" name="email" type="email" inputmode="email" x-inputmode="email" required />
                        </div>
                     </div>
                  </div>
                  <label class="input-wrp">
                  <textarea class="textfield textfield--grey" placeholder="Write your Message" name="message" required></textarea>
                  </label>
                  <div class="input-wrp">
                     <div class="g-recaptcha pull-left" data-sitekey="6LfjV8UUAAAAAG1Lm9-YewsHG3LY1fZCYJHlO7e9"></div>
                  </div>
                  <!-- csrf token -->
                  <input type="hidden" name="csrf_test_name" value="842ebb9f39bf73af2f83434ad689f3e2">
                  <button class="custom-btn custom-btn--medium custom-btn--style-3" type="submit" role="button">Send</button>
                  <div class="form__note"></div>
               </form>
            </div>
            <div class="spacer py-4 d-lg-none"></div>
         </div>
      </div>
   </section>
</main>
<!-- end main -->

@endsection