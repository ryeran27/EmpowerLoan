@extends('layouts.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="d-none d-lg-block">Loan Officer's List</h2>
                    <div class="ml-auto">
                      <a href="{{ route('add-officer') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($officers as $index => $officer)
                            <tr>
                              <td>{{ $index+1 }}</td>
                              <td>{{ $officer->emp_no }}</td>
                              <td>{{ $officer->name }}</td>
                              <td>{{ $officer->dob }}</td>
                              <td>{{ $officer->age }}</td>
                              <td>{{ $officer->gender }}</td>
                              <td>@if ($officer->status == "Active")
                                <label class="badge badge-success py-1">Active</label>
                                @else
                                <label class="badge badge-danger py-1">Inactive</label>
                                @endif</td>
                              <td>
                                <a href="#" class="btn btn-rounded btn-icon btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter{{ $officer->id }}" title="Show"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('edit-officer',['id'=>$officer->id]) }}" class="btn btn-rounded btn-icon btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete-officer',['id'=>$officer->id]) }}" class="btn btn-rounded btn-icon btn-outline-danger" title="Delete" onclick=" return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModalCenter{{ $officer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">{{ $officer->name }}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <label for="branch">Branch Code</label>
                                            <input type="text" name="branch_code" disabled class="form-control" value="{{ $officer->branch_code }}"/>
                                          </div>
                                          <div class="col-md-6">
                                            <label for="emp_no">Emp No</label>
                                            <input type="text" name="emp_no"  disabled class="form-control" value="{{ $officer->emp_no }}"/>
                                          </div>
                                      </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label for="name">Name</label>
                                              <input type="text" name="name" disabled class="form-control" value="{{ $officer->name }}"/>
                                            </div>
                                            <div class="col-md-6">
                                              <label for="email">Email</label>
                                              <input type="text" name="email"  disabled class="form-control" value="{{ $officer->email }}"/>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label for="joining_date">Joining Date</label>
                                              <input type="text" name="joining_date" disabled class="form-control" value="{{ $officer->joining_date }}"/>
                                            </div>
                                            <div class="col-md-6">
                                              <label for="dob">Birthdate</label>
                                              <input type="text" name="dob"  disabled class="form-control" value="{{ $officer->dob }}"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label for="age">Age</label>
                                            <input type="text" name="age" disabled class="form-control" value="{{ $officer->age }}"/>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="status">Status</label>
                                            <input type="text" name="status"  disabled class="form-control" value="{{ $officer->status }}"/>
                                          </div>
                                          <div class="col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone"  disabled class="form-control" value="{{ $officer->phone }}"/>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label for="address">Address</label>
                                          <input type="text" name="address" disabled class="form-control" value="{{ $officer->address }}"/>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <label for="educational">Educational Background</label>
                                        <input type="text" name="educational" disabled class="form-control" value="{{ $officer->educational }}"/>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="gender">Gender</label>
                                        <input type="text" name="gender"  disabled class="form-control" value="{{ $officer->gender }}"/>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label for="contact_person">Contact Person</label>
                                      <input type="text" name="contact_person" disabled class="form-control" value="{{ $officer->contact_person }}"/>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="contact_no">Contact Person</label>
                                      <input type="text" name="contact_no"  disabled class="form-control" value="{{ $officer->contact_no }}"/>
                                    </div>
                                </div>
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
              </div>
          
            </div>
            
          </div>
      </div>
</div>
@endsection