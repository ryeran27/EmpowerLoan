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
                          <h2 class="d-none d-lg-block text-primary">Add Loan Officer</h2>
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
                      <form action="{{ route('insert-officer') }}" method="post" enctype="multipart/form-data">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Branch</label>
                                        <select class="form-control" name="branch_code" required>
                                          <option value="">Choose...</option>
                                          @foreach ($branches as $branch)
                                          <option value="{{ $branch->branch_code }}"> 
                                              {{ $branch->branch_name }} 
                                          </option>
                                      @endforeach    
                                        </select>
                                        <span class="text-danger">@error('branch_code'){{ $message }}@enderror</span>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                  <label for="emp_no">Emp No</label>
                                  <input type="text" name="emp_no"   class="form-control" required placeholder="Enter Employee Code"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <label for="name">Name</label>
                                  <input type="text" name="name"  class="form-control" required placeholder="Enter Name"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="email">Email</label>
                                  <input type="email" name="email"   class="form-control" required placeholder="Enter Email"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <label for="joining_date">Joining Date</label>
                                  <input type="date" name="joining_date"  class="form-control" required placeholder="Enter Joining Date"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="dob">Birthdate</label>
                                  <input type="date" name="dob" id="dob" class="form-control" required placeholder="Enter Birthdate"/>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                  <label for="age">Age</label>
                                  <input type="text" name="age"  class="form-control" required readonly placeholder="Age"/>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="status" required>
                                          <option value="">Choose...</option>
                                          <option value="Active">Active</option>
                                          <option value="Inactive">Inactive</option>
                                        </select>
                                        <span class="text-danger">@error('status'){{ $message }}@enderror</span>
                                      </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-6">
                                  <label for="address">Address</label>
                                  <input type="text" name="address"  class="form-control" required placeholder="Enter Address"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="phone">Phone</label>
                                  <input type="text" name="phone"   class="form-control" required placeholder="Enter Phone"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <label for="educational">Educational Background</label>
                                  <input type="text" name="educational"  class="form-control" required placeholder="Enter Educational Background"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="contact_person">Contact Person</label>
                                  <input type="text" name="contact_person"   class="form-control" required placeholder="Enter Contact Person"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <label for="contact_no">Contact No</label>
                                  <input type="text" name="contact_no"  class="form-control" required placeholder="Enter Contact No"/>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                        <select class="form-control" name="gender" required>
                                          <option value="">Choose...</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                        </select>
                                        <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                                      </div>
                                </div>
                            </div>
                            <div class="row py-3 float-right">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection