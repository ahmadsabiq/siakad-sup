@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Struktur Sekolah</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('school.structure.create') }}" method="GET">
                            @csrf
                            <div
                                class="form-group
                            {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Enter structure name">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter structure description"></textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                <label for="parent_id">Parent</label>
                                <select name="parent_id" class="form-select">
                                    <option value="">Select parent</option>
                                    {{-- data dummy --}}
                                    <option value="1">Parent 1</option>
                                    <option value="2">Parent 2</option>
                                    <option value="3">Parent 3</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('level') ? 'has-error' : '' }}">
                                <label for="level">Level</label>
                                <input type="text" name="level" class="form-control"
                                    placeholder="Enter structure level">
                                <span class="text-danger">{{ $errors->first('level') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('order') ? 'has-error' : '' }}">
                                <label for="order">Order</label>
                                <input type="text" name="order" class="form-control"
                                    placeholder="Enter structure order">
                                <span class="text-danger">{{ $errors->first('order') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('status') ? 'has-error' : '' }}">
                                <label for="status">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('type') ? 'has-error' : '' }}">
                                <label for="type">Type</label>
                                <select name="type" class="form-select">
                                    <option value="">Select type</option>
                                    <option value="1">Class</option>
                                    <option value="2">Grade</option>
                                    <option value="3">Major</option>
                                    <option value="4">Department</option>
                                    <option value="5">Faculty</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('school_id') ? 'has-error' : '' }}">
                                <label for="school_id">School</label>
                                <select name="school_id" class="form-select">
                                    <option value="">Select school</option>
                                    {{-- data dummy --}}
                                    <option value="1">School 1</option>
                                    <option value="2">School 2</option>
                                    <option value="3">School 3</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('school_id') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('created_by') ? 'has-error' : '' }}">
                                <label for="created_by">Created By</label>
                                <input type="text" name="created_by" class="form-control" placeholder="Enter created by">
                                <span class="text-danger">{{ $errors->first('created_by') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('updated_by') ? 'has-error' : '' }}">
                                <label for="updated_by">Updated By</label>
                                <input type="text" name="updated_by" class="form-control" placeholder="Enter updated by">
                                <span class="text-danger">{{ $errors->first('updated_by') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('deleted_by') ? 'has-error' : '' }}">
                                <label for="deleted_by">Deleted By</label>
                                <input type="text" name="deleted_by" class="form-control" placeholder="Enter deleted by">
                                <span class="text-danger">{{ $errors->first('deleted_by') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('deleted_at') ? 'has-error' : '' }}">
                                <label for="deleted_at">Deleted At</label>
                                <input type="text" name="deleted_at" class="form-control"
                                    placeholder="Enter deleted at">
                                <span class="text-danger">{{ $errors->first('deleted_at') }}</span>
                            </div>
                            <div class="form-group -mt-2">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
