@extends('backend.layout')

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category List</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
                     <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between  py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Category</h6>
            <a href="{{route('students.create')}}" class="btn btn-primary">Add Student</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <a href="{{route('students.edit',$student->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{route('students.destroy',$student->id)}}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Destroy</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
@endsection