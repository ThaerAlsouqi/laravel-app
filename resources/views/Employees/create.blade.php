@extends('Layouts.app')

@section('title', 'Add Employee')


@section('section')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Edit Employee</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL('employee/store') }}" method="POST">
                            @csrf
                            <div class="row mt-2 mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="FirstName" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                                        required>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                                        required>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary"
                                        required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection