@extends('dashboard.layout')

@section('content')


 <!-- Main content -->
  <section class="content">
                              
      <div class="list_area container" style="display: block">
      
                  <h3 class="box-title">All customers <a href="/customers/create" class="pull-right btn btn-info rounded btn-sm"><i class="fa fa-plus"></i> Add New Customer</a></h3>
        
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive mt-20 p-0">
            <table class="table table-hover ">
              
                <thead>
                  
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($customers as $customer)
                    <tr id="row_22">                   
                      <td>{{ $customer->id }}</td>
                      <td><strong>{{ $customer->name }}</strong></td>
                      <td>{{ $customer->email }}</td>
                      <td>{{ $customer->phone }}</td>
                      <td>{{ $customer->address }}</td>
                      <td>{{ $customer->created_at }}</td>
                      
                      <td class="actions" width="12%">

                        <form action="{{ route('customers.destroy',$customer->id) }}" method="post">
                          <a href="{{ route('customers.edit',$customer->id) }}" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

                          @csrf
                          @method('DELETE')

                          <!-- <a type="submit" data-val=" Customer" data-id="22" class="on-default remove-row delete_item" 
                          data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a> &nbsp; -->

                          <button type="submit">Delete</button>
                        </form>

                      </td>
                    </tr>
                    
                     </tbody>
                  @endforeach
            </table>
        </div>

      </div>
    
  </section>

@endsection



         
            
       
         



            
         