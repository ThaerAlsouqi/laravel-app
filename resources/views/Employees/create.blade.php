@extends('Layouts.app')

@section('title', 'Add Employee')


@section('section')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- General Validation Alert -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-exclamation-circle me-2 fs-5"></i>
                            <div>
                                <strong>Validation Failed!</strong>
                                <p class="mb-0 mt-2">Please fix the following errors:</p>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card shadow-lg">
                    <div class="card-header text-white">
                        <h5 class="mb-0"><i class="bi bi-person-plus me-2"></i>Add Employee</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL('employee/store') }}" method="POST" novalidate>
                            @csrf
                            <!-- First Name & Last Name Row -->
                            <div class="row mt-3 mb-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label"><strong>First Name</strong></label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                        id="first_name" name="first_name" placeholder="Enter first name"
                                        value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-x-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label"><strong>Last Name</strong></label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        id="last_name" name="last_name" placeholder="Enter last name"
                                        value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-x-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Address Row -->
                            <div class="row mt-3 mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label"><strong>Address</strong></label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        id="address" name="address" placeholder="Enter address"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-x-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Salary Row -->
                            <div class="row mt-3 mb-4">
                                <div class="col-md-6">
                                    <label for="salary" class="form-label"><strong>Salary</strong></label>
                                    <input type="number" class="form-control @error('salary') is-invalid @enderror"
                                        id="salary" name="salary" placeholder="Enter salary"
                                        value="{{ old('salary') }}" step="0.01" min="0">
                                    @error('salary')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-x-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100 btn-lg">
                                        <i class="bi bi-check-circle me-2"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
