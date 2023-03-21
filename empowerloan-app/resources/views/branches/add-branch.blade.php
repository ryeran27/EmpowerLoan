@extends('layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                
                <div class="card-body ">
                    <div class="card-header card-title">
                        <div class="d-flex align-items-center">
                          <h2 class="d-none d-lg-block text-primary">Add Branch</h2>
                          {{-- <div class="ml-auto">
                            <a href="{{ route('admin.hotel-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> List</a>
                          </div> --}}
                        </div>
                      </div>
                      @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                      @endif
                      <form action="{{ route('insert-branch') }}" method="post" enctype="multipart/form-data">
                        @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                            @endif
                            @if (Session::get('status'))
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                            @endif
                            @csrf 
                            <div class="form-group">
                                <label for="inputCaption1">Branch Code</label>
                                <input type="text" name="branch_code" class="form-control" required placeholder="Enter Branch Code">
                                <span class="text-danger">@error('branch_code'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputCaption1">Branch Name</label>
                                <input type="text" name="branch_name" class="form-control" required placeholder="Enter Branch Name">
                                <span class="text-danger">@error('branch_name'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputCaption2">Branch Address</label>
                                <input type="text" name="branch_address" class="form-control" required placeholder="Enter Branch Address">
                                <span class="text-danger">@error('branch_address'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputCaption3">Branch Manager</label>
                                <input type="text" name="branch_manager" class="form-control" required placeholder="Enter Branch Manager">
                                <span class="text-danger">@error('branch_manager'){{ $message }}@enderror</span>
                            </div>
                            
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection