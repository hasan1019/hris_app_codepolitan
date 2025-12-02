@extends('layouts.dashboard.dashboard')

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Employee</h3>
                    <p class="text-subtitle text-muted">Handle Employee Detail</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Employee</li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Detail Employee
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for=""><b>Fullname</b></label>
                        <p>{{ $employee->fullname }}</p>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Email</b></label>
                        <p>{{ $employee->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Department</b></label>
                        <p>{{ $employee->department->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Role</b></label>
                        <p>{{ $employee->role->title }}</p>
                    </div>

                    <div class="mb-3">
                        <label for=""><b>Birth Date</b></label>
                        <p>{{ \Carbon\Carbon::parse($employee->birth_date)->format('d F Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Hire Date</b></label>
                        <p>{{ \Carbon\Carbon::parse($employee->hire_date)->format('d F Y') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for=""><b>Status</b></label>
                        <p>
                            @if ($employee->status == 'active')
                                <span class="text-success">{{ ucfirst($employee->status) }}</span>
                            @else
                                <span class="text-danger">{{ ucfirst($employee->status) }}</span>
                            @endif
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="">Salary</label>
                        <p>{{ 'Rp.' . number_format($employee->salary) }}</p>
                    </div>
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back To List</a>
                </div>
            </div>

        </section>
    </div>

    <footer>
        <div class="footer
                                clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                    by <a href="https://saugi.me">Saugi</a></p>
            </div>
        </div>
    </footer>
    </div>
    </section>
@endsection
