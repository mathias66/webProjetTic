@extends('webProjetDb.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>webProjetModels List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('create')}}"> Create New webProjetModel</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone #</th>
            <th>Email</th>
            <th>Address</th>
            <th>Job</th>
            <th width="280px">Action</th>
        </tr>
        
    </table>
  
    
      
@endsection
