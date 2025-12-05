@extends('Layouts.app');
@section('title', 'Employees');
@section('section')
    <div class="container py-5">
        <form action="{{ URL('employee') }}" method="GET">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input id="search" name="search" type="text" class="form-control w-25" placeholder="Search employees..."
                    value="{{ request('search') }}">
            </div>

        </form>


        <!-- عنوان + زر أكشن -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="mb-0">Employees</h3>
                <small class="text-muted">List of all employees and their salaries</small>
            </div>

            <a href="{{ Route('create') }}" class="btn btn-primary btn-sm">
                <!-- احذف الآيكون لو ما عندك Bootstrap Icons -->
                <i class="bi bi-plus-circle me-1"></i>
                Add Employee
            </a>
        </div>

        <!-- كارد تحتوي الجدول -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0 align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th class="text-end">Salary</th>
                                <th class="text-center" style="width: 160px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->first_name }}
                                    </td>
                                    <td>
                                        {{ $item->last_name }}
                                    </td>
                                    <td class="text-end">
                                        {{ $item->salary }}$
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-outline-primary btn-sm">view</a>
                                        <a href="#" class="btn btn-outline-danger btn-sm">delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        {{ $employees->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
