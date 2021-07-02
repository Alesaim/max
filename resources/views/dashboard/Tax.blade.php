@extends('dashboard.layout')

@section('content')

  <!-- Main content -->
 <section class="content">
   <div class="row">
      <div class="col-md-5">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Add new GST </h3>

               @if($message = Session::get('success'))
                 <div class="alert alert-success">
                     <p>{{ $message }}</p>
                 </div>
               @endif

               <div class="box-tools pull-right">
               </div>
            </div>
            <div class="box-body">
               <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="/gsts/store" role="form" novalidate>
                  @csrf
                  <div class="form-group">
                     <label>Name <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" required name="name" value="" >
                  </div>
                  <div class="row m-t-30">
                     <div class="col-sm-12">
                        <button type="submit" class="btn btn-info rounded pull-left"><i class="fa fa-check"></i> Save </button>
                     </div>
                  </div>
               </form>
               <br>
               <table class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($gsts as $gst)
                     <tr id="row_8">
                        <td>{{ $gst->id }}</td>
                        <td>{{ $gst->name }}</td>
                     
                        <td class="actions" width="15%">

                           <form action="#" method="post">
                                <a href="#" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>
                              </form>

                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="col-md-7">
         <div class="box add_area" style="display: none">
            <div class="box-header with-border">
               <h3 class="box-title">Add new tax </h3>
               <div class="box-tools pull-right">
                  <a href="#" class="text-right btn btn-default rounded btn-sm cancel_btn"><i class="fa fa-angle-left"></i> Back</a>
               </div>
            </div>
            <div class="box-body">
               <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="/taxes/store" role="form" novalidate>
                  @csrf
                  <div class="form-group">
                     <label class="col-sm-2 control-label p-0" for="example-input-normal">Tax <span class="text-danger">*</span></label>
                     <select class="form-control" name="type" required>
                        <option value="">Select</option>

                        <option value="1">
                          Individual Income Tax
                        </option>
                        <option value="2">
                          Corporate Income Tax
                        </option>
                        <option value="3">
                          Payroll Tax
                        </option>
                        <option value="4">
                          Capital Gains Tax
                        </option>
                        <option value="5">
                          Sales Tax
                        </option>
                        <option value="6">
                          Gross Receipts Tax
                        </option>
                        <option value="7">
                          Excise Tax
                        </option>

                     </select>

                  </div>
                  <div class="form-group">
                     <label>Tax Name <span class="text-danger">*</span></label>
                     <input type="text" class="form-control"  name="name" required value="" >
                  </div>
                  <div class="form-group">
                     <label>Tax Rate  (%)<span class="text-danger">*</span></label>
                     <input type="text" class="form-control"  name="rate" required value="">
                     <p>Tax rate should be a number only, without a percent sign</p>
                  </div>
                                    
                  <hr>
                  <div class="row m-t-30">
                     <div class="col-sm-12">
                        <button type="submit" class="btn btn-info rounded pull-left"><i class="fa fa-check"></i> Save </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="list_area container">
            <h3 class="box-title">All tax <a href="#" class="pull-right btn btn-info rounded btn-sm add_btn"><i class="fa fa-plus"></i> Add new tax</a></h3>

            @if($message = Session::get('tax'))
                 <div class="alert alert-success">
                     <p>{{ $message }}</p>
                 </div>
               @endif

            <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive mt-20 p-0">
               <table class="table table-bordered table-hover  " id="dg_table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Rate</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                      @foreach($taxes as $tax)
                     <tr id="row_8">
                        <td>{{ $tax->id }}</td>
                        <td>{{ $tax->type }}</td>
                        <td>{{ $tax->name }}</td>
                        <td>{{ $tax->rate }}</td>
                     
                        <td class="actions" width="15%">

                           <form action="#" method="post">
                                <a href="#" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>
                              </form>

                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection