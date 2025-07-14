@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Create Student</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official
            DataTables documentation</a>.</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between  py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create new Student</h6>
            <a href="{{route('students.create')}}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="studentName"
                            class="form-control w-50 @error('studentName') is-invalid @enderror" id="name"
                            placeholder="Eg: Kyaw Kyaw" value="{{ old('studentName') }}">
                        @error('studentName')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                        <input type="number" name="studentAge"
                            class="form-control w-50 @error('studentAge') is-invalid @enderror" id="age"
                            placeholder="Eg: 22" value="{{ old('studentAge') }}">
                        @error('studentAge')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="studentGender" id="gender"
                            class="form-control w-50 @error('studentGender') is-invalid @enderror">
                            <option value="">-- Select Gender --</option>
                            <option value="male">Male</option>
                            <option value="female" >Female</option>
                        </select>
                        @error('studentGender')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="studentAddress"
                            class="form-control w-50 @error('studentAddress') is-invalid @enderror" id="address"
                            placeholder="Eg: Your Address" value="{{ old('studentAddress') }}">
                        @error('studentAddress')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection