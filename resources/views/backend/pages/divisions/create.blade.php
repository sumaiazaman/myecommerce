@extends('backend.layouts.master')

@section('content')


<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
        Add Division
      </div>

     <div class="card-body">
       <form action="{{ route('admin.division.store') }}" method="post" enctype="multipart/form-data">
           @csrf
           @include('backend.partials.messages')
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" class="form-control" name="name" id="name" placeholder="Enter Division Name">
           </div>

           <div class="form-group">
             <label for="priority">Priority</label>
             <input type="text" class="form-control" name="priority" id="priority" placeholder="Enter Division Priority">
           </div>

             <div class="form-control">
                 <button type="submit" class="btn btn-primary">Add Division</button>
             </div>
         </form>
     </div>

    </div>
    </div>
</div>
<!-- main-panel ends -->
@endsection
