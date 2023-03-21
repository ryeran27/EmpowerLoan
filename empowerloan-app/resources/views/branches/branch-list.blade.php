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
                    <h2 class="d-none d-lg-block">Branch List</h2>
                    <div class="ml-auto">
                      <a href="{{ route('add-branch') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive" >
                  <table class="table" style="width: auto" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Branch Name</th>
                        <th>Branch Address</th>
                        <th>Branch Manager</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($branches as $index => $branch)
                      <tr>
                       
                        <td>{{ $index+1 }}</td>
                        <td>{{ $branch->branch_name }}</td>
                        <td>{{ $branch->branch_address }}</td>
                        <td>{{ $branch->branch_manager }}</td>
                        <td>{{ $branch->status }}</td>
                        <td>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-rounded btn-icon btn-outline-danger" title="Delete" onclick=" return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                      @endforeach
                     
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