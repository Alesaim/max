@extends('layout.main');

@section('content');

<!-- start main -->
<main role="main">
   <!-- start section -->
   <section class="section">
      <div class="container">
         <div class="section-heading section-heading--center">
            <h3 class="__title">Small Business—friendly Pricing</h3>
            <p>We're offering a generous Free Plan and affordable premium pricing plans that grow with your business</p>
         </div>
         <div class="row">
            <div class="col-11">
               <div class="content-container">
                  <!-- start pricing table -->
                  <div class="pricing-table pricing-table--s4" data-aos="fade" data-aos-delay="150">
                     <div class="d-block">
                        <div class="spacer py-4"></div>
                        <div class="col-md-4 text-center m-auto mb-20 price-swicher">
                           <figure class="discount-badge">
                              <svg class="d-block mt-n2 ml-n4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 99.3 57" width="48" transform="scale(-1,1)">
                                 <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M2,39.5l7.7,14.8c0.4,0.7,1.3,0.9,2,0.4L27.9,42"></path>
                                 <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M11,54.3c0,0,10.3-65.2,86.3-50"></path>
                              </svg>
                              <span class="badge badge-default soft-blue badge-pill py-sm-2 px-sm-3">Save up to 60%</span>
                           </figure>
                           <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-outline-primary custom-btngp">
                              <input type="radio" name="payment_type" value="monthly" class="switch_price" id="monthly-1"> Monthly                                 </label>
                              <label class="btn btn-outline-primary custom-btngp">
                              <input type="radio" name="payment_type" value="yearly" class="switch_price" id="yearly-1" checked> Yearly                                </label>
                           </div>
                        </div>
                        <br><br>
                        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive p-0 mt-20">
                           <table class="text-center rounded">
                              <tbody>
                              <thead class="thead mb-100">
                                 <tr class="">
                                    <th>
                                       <div class="h2"></div>
                                    </th>
                                    <th class="pt-40 text-center ">
                                       <div class="__header">
                                          <div class="__title h3">Starter </div>
                                       </div>
                                       <h4>
                                          <span class="monthly_show price-dis" style="display: none;">
                                          10% Off                                                              </span>
                                          <span class="yearly_show price-dis">
                                          20% Off                                                              </span>
                                       </h4>
                                    </th>
                                    <th class="pt-40 text-center colm_2">
                                       <div class="__header">
                                          <div class="__title h3">Standard </div>
                                       </div>
                                       <h4>
                                          <span class="monthly_show price-dis" style="display: none;">
                                          20% Off                                                              </span>
                                          <span class="yearly_show price-dis">
                                          40% Off                                                              </span>
                                       </h4>
                                    </th>
                                    <th class="pt-40 text-center ">
                                       <div class="__header">
                                          <div class="__title h3">Premium </div>
                                       </div>
                                       <h4>
                                          <span class="monthly_show price-dis" style="display: none;">
                                          30% Off                                                              </span>
                                          <span class="yearly_show price-dis">
                                          60% Off                                                              </span>
                                       </h4>
                                    </th>
                                 </tr>
                                 <tr>
                                    <td>
                                       <h2></h2>
                                    </td>
                                    <td class="p-0">
                                       <div class="theader ">
                                          <div class="__price mb-5 ">
                                             <span class="price_year price-off">
                                             $50                                                            </span>  
                                             <span class="price_year">
                                             $40                                                              </span>
                                             <span class="price_month price-off" style="display: none;">
                                             $0 
                                             </span>
                                             <span class="price_month" style="display: none;">
                                             $0                                                            </span>
                                          </div>
                                          <p class="mt-0 bill_type">per year</p>
                                       </div>
                                    </td>
                                    <td class="p-0">
                                       <div class="theader colm_2">
                                          <div class="__price mb-5 colm_2">
                                             <span class="price_year price-off">
                                             $100                                                            </span>  
                                             <span class="price_year">
                                             $60                                                              </span>
                                             <span class="price_month price-off" style="display: none;">
                                             $10 
                                             </span>
                                             <span class="price_month" style="display: none;">
                                             $8                                                            </span>
                                          </div>
                                          <p class="mt-0 bill_type">per year</p>
                                       </div>
                                    </td>
                                    <td class="p-0">
                                       <div class="theader ">
                                          <div class="__price mb-5 ">
                                             <span class="price_year price-off">
                                             $200                                                            </span>  
                                             <span class="price_year">
                                             $80                                                              </span>
                                             <span class="price_month price-off" style="display: none;">
                                             $20 
                                             </span>
                                             <span class="price_month" style="display: none;">
                                             $14                                                            </span>
                                          </div>
                                          <p class="mt-0 bill_type">per year</p>
                                       </div>
                                    </td>
                                 </tr>
                              </thead>
                              <tr class="monthly_row" style="display: none">
                                 <td class="text-right">Invoices</td>
                                 <td class="text-center">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    30                                                                                              
                                 </td>
                                 <td class="text-center">
                                    60                                                                                              
                                 </td>
                              </tr>
                              <tr class="monthly_row" style="display: none">
                                 <td class="text-right">Estimates</td>
                                 <td class="text-center">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    40                                                                                              
                                 </td>
                                 <td class="text-center">
                                    100                                                                                              
                                 </td>
                              </tr>
                              <tr class="monthly_row" style="display: none">
                                 <td class="text-right">Customers</td>
                                 <td class="text-center">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    20                                                                                              
                                 </td>
                                 <td class="text-center">
                                    50                                                                                              
                                 </td>
                              </tr>
                              <tr class="monthly_row" style="display: none">
                                 <td class="text-right">Business</td>
                                 <td class="text-center">
                                    3                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center">
                                    10                                                                                              
                                 </td>
                              </tr>
                              <tr class="monthly_row" style="display: none">
                                 <td class="text-right">Invoice templates</td>
                                 <td class="text-center">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center">
                                    5                                                                                              
                                 </td>
                              </tr>
                              <tr class="yearly_row">
                                 <td class="text-right">Invoices</td>
                                 <td class="text-center colm_1">
                                    <p class="mb-0 feature-item">Unlimited</p>
                                 </td>
                                 <td class="text-center colm_2">
                                    300                                                                                              
                                 </td>
                                 <td class="text-center colm_3">
                                    <p class="mb-0 feature-item">Unlimited</p>
                                 </td>
                              </tr>
                              <tr class="yearly_row">
                                 <td class="text-right">Estimates</td>
                                 <td class="text-center colm_1">
                                    100                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    200                                                                                              
                                 </td>
                                 <td class="text-center colm_3">
                                    <p class="mb-0 feature-item">Unlimited</p>
                                 </td>
                              </tr>
                              <tr class="yearly_row">
                                 <td class="text-right">Customers</td>
                                 <td class="text-center colm_1">
                                    20                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    70                                                                                              
                                 </td>
                                 <td class="text-center colm_3">
                                    <p class="mb-0 feature-item">Unlimited</p>
                                 </td>
                              </tr>
                              <tr class="yearly_row">
                                 <td class="text-right">Business</td>
                                 <td class="text-center colm_1">
                                    10                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    25                                                                                              
                                 </td>
                                 <td class="text-center colm_3">
                                    50                                                                                              
                                 </td>
                              </tr>
                              <tr class="yearly_row">
                                 <td class="text-right">Invoice templates</td>
                                 <td class="text-center colm_1">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_2">
                                    5                                                                                              
                                 </td>
                                 <td class="text-center colm_3">
                                    5                                                                                              
                                 </td>
                              </tr>
                              <tfoot>
                                 <tr class="btom">
                                    <td></td>
                                    <td class="">
                                       <a class="custom-btn custom-btn--medium custom-btn--style-3" href="register.html">Get Started</a>
                                    </td>
                                    <td class="colm_2">
                                       <a class="custom-btn custom-btn--medium custom-btn--style-2" href="register.html">Get Started</a>
                                    </td>
                                    <td class="">
                                       <a class="custom-btn custom-btn--medium custom-btn--style-3" href="register.html">Get Started</a>
                                    </td>
                                 </tr>
                              </tfoot>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!-- end pricing table -->
               </div>
            </div>
         </div>
         <div class="spacer py-4"></div>
      </div>
   </section>
   <!-- end section -->    
</main>
<!-- end main -->

@endsection


         
         