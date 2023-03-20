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
                      <a href="#" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive" >
                  <table class="table" style="width: auto" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Reference No</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Tour Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($pasenger as $index => $passengers) --}}
                      <tr>
                       
                        <td>1</td>
                        <td>reference_no</td>
                        <td>firstname</td>
                        <td>lastname</td>
                        <td>dob</td>
                        <td>age</td>
                        <td>gender</td>
                        <td>tour_type</td>
                        <td>
                          {{-- @if ($passengers->status == "Approved")
                          <label class="badge badge-success">Approved</label>
                          @else
                          <label class="badge badge-danger">Approved</label>
                          @endif --}}
                          Approved
                        </td>
                        <td>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-danger" title="Delete" onclick=" return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                     
                    </tbody>
                  </table>
                  {{-- {{ $pasenger->links() }} --}}
                  <p>
                    {{-- Displaying {{$pasenger->count()}} of {{ $pasenger->total() }} passenger(s). --}}
                    {{-- Showing {{($pasenger->currentPage()-1)* $pasenger->perPage()+($pasenger->total() ? 1:0)}} to {{($pasenger->currentPage()-1)*$pasenger->perPage()+count($pasenger)}}  of  {{$pasenger->total()}}  Results --}}
                </p>
                </div>
              </div>
          
            </div>
            
          </div>
      </div>
</div>
@endsection