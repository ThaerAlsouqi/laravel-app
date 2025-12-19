@extends('layouts.app')
@section('title','Edit Employee')

@section('section')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Add Employee</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL('employee/update',$employee->id) }}" method="POST">
                            @csrf
                            <div class="row mt-2 mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="FirstName" required value="{{ $employee->first_name }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" required value="{{ $employee->last_name }}">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" required value="{{ $employee->address }}">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary"
                                        required value="{{ $employee->salary }}">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection