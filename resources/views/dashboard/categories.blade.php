@extends('dashboard.layout')
@section('content')

<!-- Main content -->
<section class="content">
   <div class="list_area container">
      <h3 class="box-title">Categories <a href="/categories/create" class="pull-right btn btn-info rounded btn-sm"><i class="fa fa-plus"></i> Add new category</a></h3>

      @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p> 
        </div>
        @endif

      <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive mt-20 p-0">
         <table class="table table-bordered table-hover datatable" id="dg_table">
            <thead>
               <tr>
                  <th>#</th> 
                  <th>Name</th>
                  <th>Type</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($categories as $category)
               <tr id="row_8">
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>
                     <span class="label label-success">{{ $category->type }}</span>
                  </td>
                  <td class="actions" width="15%">

                     <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                          <a href="{{ route('categories.edit',$category->id) }}" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

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
</section>
@endsection