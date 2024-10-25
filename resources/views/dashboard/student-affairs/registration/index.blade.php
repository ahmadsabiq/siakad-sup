@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- form student registration --}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendaftaran Siswa</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Data Calon Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student-affairs.students.create') }}" method="GET">
                            @csrf
                            <div
                                class="form-group
                            {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter student name">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div
                                class="form-group
                            {{ $errors->has('registration_path') ? 'has-error' : '' }}">
                                <label for="registration_path">Jalur Pendaftaran</label>
                                <select name="registration_path" class="form-select">
                                    <option value="">Jalur Pendaftaran</option>
                                    {{-- data dummy --}}
                                    <option value="1">Jalur Pendaftaran 1</option>
                                    <option value="2">Jalur Pendaftaran 2</option>
                                    <option value="3">Jalur Pendaftaran 3</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('register_path') }}</span>
                            </div>
                            {{-- jenis kelamin --}}
                            <div
                                class="form-group
                                {{ $errors->has('gender') ? 'has-error' : '' }}">
                                <label for="gender_id">Jenis Kelamin</label>
                                <select name="gender_id" class="form-select">
                                    <option value="">Jenis Kelamin</option>
                                    {{-- data dummy --}}
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender_id') }}</span>
                            </div>
                            {{-- Tempat Lahir --}}
                            <div
                                class="form-group
                                {{ $errors->has('birth_place') ? 'has-error' : '' }}">
                                <label for="birth_place">Tempat Lahir</label>
                                <select name="birth_place" class="form-select">
                                    <option value="">Tempat Lahir</option>
                                    {{-- data dummy --}}
                                    <option value="1">Bandung</option>
                                    <option value="2">Jakarta</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender_id') }}</span>
                            </div>
                            {{-- tanggal lahir --}}
                            <div
                                class="form-group
                                {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" class="form-control"
                                    placeholder="Enter student birth date">
                                <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                            </div>
                            {{-- Alamat --}}
                            <div
                                class="form-group
                                {{ $errors->has('address') ? 'has-error' : '' }}">
                                <label for="address">Alamat</label>
                                <textarea name="address" class="form-control" placeholder="Enter student address"></textarea>
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>




                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
