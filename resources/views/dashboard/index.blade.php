<!-- resources/views/dashboard/index.blade.php -->
@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome to the Admin Dashboard</h2>
                <p>Here you can manage the entire school system efficiently.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">Manage student registrations and information.</p>
                        <a href="" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Teachers</h5>
                        <p class="card-text">Manage teacher data and assignments.</p>
                        <a href="" class="btn btn-primary">View Teachers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Finance</h5>
                        <p class="card-text">Handle all financial activities.</p>
                        <a href="" class="btn btn-primary">Manage Finance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Attendance</h5>
                        <p class="card-text">Track and manage attendance records.</p>
                        <a href="" class="btn btn-primary">Check Attendance</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Academics</h5>
                        <p class="card-text">Manage curriculum and schedules.</p>
                        <a href="" class="btn btn-primary">View Academics</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">View and download academic reports.</p>
                        <a href="" class="btn btn-primary">View Reports</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Hostel</h5>
                        <p class="card-text">Manage hostel allocations and schedules.</p>
                        <a href="" class="btn btn-primary">Manage Hostel</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Announcements</h5>
                        <p class="card-text">Post and view important announcements.</p>
                        <a href="" class="btn btn-primary">View
                            Announcements</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
