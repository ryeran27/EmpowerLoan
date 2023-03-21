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
                                <th>Branch</th>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Branch</th>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($officers as $index => $officer)
                            <tr>
                              <td>{{ $index+1 }}</td>
                              <td>{{ $officer->branch_code }}</td>
                              <td>{{ $officer->branch_name }}</td>
                              <td>{{ $officer->branch_address }}</td>
                              <td>{{ $officer->branch_manager }}</td>
                              <td>@if ($officer->status == "Active")
                                <label class="badge badge-success py-1">Active</label>
                                @else
                                <label class="badge badge-danger py-1">Inactive</label>
                                @endif</td>
                              <td>
                                <a href="#" class="btn btn-rounded btn-icon btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter{{ $officer->id }}" title="Show"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('edit-branch',['id'=>$officer->id]) }}" class="btn btn-rounded btn-icon btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete-branch',['id'=>$officer->id]) }}" class="btn btn-rounded btn-icon btn-outline-danger" title="Delete" onclick=" return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $officer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">{{ $officer->name }}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <label for="name">Code</label>
                                            <input type="text" name="branch_code" readonly class="form-control" value="{{ $officer->branch_code }}"/>
                                          </div>
                                      </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                <label for="name">Branch</label>
                                                <input type="text" name="branch_name" readonly class="form-control" value="{{ $officer->branch_name }}"/>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                <label for="name">Address</label>
                                                <input type="text" name="branch_address" readonly class="form-control" value="{{ $officer->branch_address }}"/>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <label for="name">Manager</label>
                                              <input type="text" name="branch_manager" readonly class="form-control" value="{{ $officer->branch_manager }}"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <label for="name">Status</label>
                                            <input type="text" name="status" readonly class="form-control" value="{{ $officer->status }}"/>
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