@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
        Edit District
      </div>
      <div class="card-body">
        <form action="{{ route('admin.district.update',$district->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{$district->name}}">
           </div>
           <div class="form-group">
              <label for="division_id">Select a Division for this District</label>
              <select class="form-control" name="division_id">
                <option value="">Please select a Division for the District</option>
                @foreach($divisions as $division)
                   <option value="{{ $division->id }}" {{ $district->division->id?'selected':'' }}>{{ $division->name }}</option>
                @endforeach
              </select>
           </div>
              <button type="submit" class="btn btn-success">Update District</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
