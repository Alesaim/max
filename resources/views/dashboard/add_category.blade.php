@extends('dashboard.layout')

@section('content')

  <!-- Main content -->
  <section class="content">

      <div class="col-md-6 m-auto box add_area mt-50">
        <div class="box-header with-border">
                      <h3 class="box-title">Add new category </h3>
          
          <div class="box-tools pull-right">
              <a href="/categories" class="text-right btn btn-default rounded btn-sm cancel_btn"><i class="fa fa-angle-left"></i> Back</a>
          </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problem with your input.<br><br>
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

        <div class="box-body">
          <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="{{ route('categories.store') }}" role="form" novalidate>
          @csrf  

            <div class="form-group">
              <label>Category Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" required name="name" value="" >
            </div>

            <div class="row m-t-30">
              <div class="col-sm-2 text-left">
                <div class="radio radio-info radio-inline">
                  <input type="radio" id="inlineRadio1" required value="1" name="type" >
                  <label for="inlineRadio1"> Income </label>
                </div>
              </div>
              <div class="col-sm-1 text-left">
                <div class="radio radio-info radio-inline">
                  <input type="radio" id="inlineRadio2" required value="2" name="type" >
                  <label for="inlineRadio2"> Expense </label>
                </div>
              </div>
            </div>
            
            <div class="row mt-20">
              <div class="col-sm-12">
                  <button type="submit" class="btn btn-info rounded pull-left"><i class="fa fa-check"></i>Save </button>
              </div>
            </div>

          </form>

        </div>
      </div>
      
  </section>
@endsection