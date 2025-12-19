@extends('Layouts.app')

@section('title', 'Employees')

@section('section')

    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <!-- Header Section -->
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h1 class="mb-2 page-title">Employees</h1>
                    <small class="text-muted">List of all employees and their salaries</small>
                </div>
                <a href="{{ URL('employee/create') }}" class="btn btn-primary btn-lg">
                    <i class="bi bi-plus-circle me-2"></i>
                    Add Employee
                </a>
            </div>

            <!-- Search Bar -->
            <form action="{{ URL('employee') }}" method="GET" class="mb-4">
                <div class="input-group input-group-lg">
                    <input id="search" name="search" type="text" class="form-control" placeholder="Search by first name, last name..."
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>

            <!-- Table Card -->
            <div class="card shadow-lg border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0 align-middle">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th class="text-end">Salary</th>
                                    <th class="text-center" style="width: 180px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $item)
                                    <tr>
                                        <td>
                                            <span class="badge">{{ $item->id }}</span>
                                        </td>
                                        <td>
                                            <strong class="text-primary">{{ $item->first_name }}</strong>
                                        </td>
                                        <td>
                                            {{ $item->last_name }}
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-secondary">${{ number_format($item->salary, 2) }}</strong>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ URL('employee/edit',$item->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <form action="{{ URL('employee/delete',$item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure u wanna delete {{ $item->id }}?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <p class="text-muted mb-0">No employees found.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white border-top">
                    <div class="d-flex justify-content-center">
                        {{ $employees->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection