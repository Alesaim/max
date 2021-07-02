@extends('dashboard.layout')

@section('content')

<section class="content">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box">
                        <div class="box-header with-border">
                           <h3 class="box-title"><strong class="text-right">Last 12 months Income </strong></h3>
                        </div>
                        <div class="box-body">
                           <div id="incomeChart"></div>
                        </div>
                     </div>
                     <div class="box mt-10">
                        <div class="box-header with-border">
                           <h3 class="box-title">Net Income</h3>
                        </div>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Fiscal year  <i class="fa fa-info-circle" data-toggle="tooltip" data-title="Fiscal year start is January 01"></i></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Income</td>
                                    </tr>
                                    <tr>
                                       <td>Expense</td>
                                    </tr>
                                    <tr>
                                       <td>Net Income </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box">
                        <div class="box-header with-border">
                           <h3 class="box-title">Upcomming Recurring Payments</h3>
                        </div>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th> Customer</th>
                                       <th>Total</th>
                                       <th>Amount Due</th>
                                       <th>Next Payment</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <p>No data founds</p>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="box">
                        <div class="box-header with-border">
                           <h3 class="box-title">Overdue Invoices</h3>
                        </div>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th> Customer</th>
                                       <th>Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <p>No data founds</p>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="box">
                        <div class="box-header with-border">
                           <h3 class="box-title">Pending Invoices</h3>
                        </div>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th> Customer</th>
                                       <th>Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <p>No data founds</p>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="box hide">
                        <div class="box-header with-border">
                           <h3 class="box-title">Recently Paid Invoices</h3>
                        </div>
                        <div class="box-body">
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th> Customer</th>
                                       <th>Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <p>No data founds</p>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

@endsection