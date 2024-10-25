@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- form student registration --}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendaftaran Siswa</h1>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} </div>
    @endif

    <div class="row">
        {{-- Sementara get Routing ke parent create seharusnya post dulu untuk disimpan baru get ke parent create --}}

        <form action="{{ route('student-affairs.parents.create') }}" method="GET">
            @csrf
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4>A. DATA CALON SANTRI</h4>
                    </div>
                    <div class="card-body">

                        {{-- Nama Lengkap --}}
                        <div class="form-group
                            {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter student name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        {{-- Jalur Pendaftaran --}}
                        <div
                            class="form-group
                            {{ $errors->has('registration_path') ? 'has-error' : '' }}">
                            <label for="registration_path">Jalur Pendaftaran</label>
                            <select name="registration_path" class="form-select">
                                <option value="">Jalur Pendaftaran</option>
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
                            <input type="text" name="birth_place" class="form-control" placeholder="Bandung">
                            <span class="text-danger">{{ $errors->first('birth_place') }}</span>
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

                        {{-- Kelurahan --}}
                        <div
                            class="form-group
                                {{ $errors->has('sub_district') ? 'has-error' : '' }}">
                            <label for="sub_district">Kelurahan</label>
                            <input type="text" name="sub_district" class="form-control"
                                placeholder="Enter student sub district">
                            <span class="text-danger">{{ $errors->first('sub_district') }}</span>
                        </div>

                        {{-- Kecamatan --}}
                        <div
                            class="form-group
                            {{ $errors->has('district') ? 'has-error' : '' }}">
                            <label for="district">Kecamatan</label>
                            <input type="text" name="district" class="form-control" placeholder="Enter student district">
                            <span class="text-danger">{{ $errors->first('district') }}</span>
                        </div>

                        {{-- Kabupaten Kota --}}
                        <div class="form-group
                            {{ $errors->has('city') ? 'has-error' : '' }}">
                            <label for="city">Kabupaten/Kota</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter student city">
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>

                        {{-- Provinsi --}}
                        <div
                            class="form-group
                            {{ $errors->has('province') ? 'has-error' : '' }}">
                            <label for="province">Provinsi</label>
                            <input type="text" name="province" class="form-control" placeholder="Enter student province">
                            <span class="text-danger">{{ $errors->first('province') }}</span>
                        </div>

                        {{-- Kode Pos --}}
                        <div
                            class="form-group
                            {{ $errors->has('postal_code') ? 'has-error' : '' }}">
                            <label for="postal_code">Kode Pos</label>
                            <input type="text" name="postal_code" class="form-control"
                                placeholder="Enter student postal code">
                            <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                        </div>

                        {{-- Anak ke berapa dari berapa saudara --}}
                        <div
                            class="form-group
                            {{ $errors->has('sibling') ? 'has-error' : '' }}">
                            <label for="sibling">Anak ke berapa dari berapa saudara</label>
                            <input type="text" name="sibling" class="form-control" placeholder="Enter student sibling">
                            <span class="text-danger">{{ $errors->first('sibling') }}</span>
                        </div>

                        {{-- apakah ada saudara mondok? --}}
                        <div
                            class="form-group
                            {{ $errors->has('boarding_sibling') ? 'has-error' : '' }}">
                            <label for="boarding_sibling">Apakah ada saudara mondok?</label>
                            <select name="boarding_sibling" class="form-select">
                                <option value="">Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('boarding_sibling') }}</span>
                            {{-- Kelas? --}}
                            <div
                                class="form-group
                            {{ $errors->has('class') ? 'has-error' : '' }}">
                                <label for="class">Kelas</label>
                                <select name="class" class="form-select">
                                    <option value="">Pilih</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>B. RIWAYAT PENDIDIKAN CALON SANTRI</h4>
                        </div>
                        <div class="card-body">

                            {{-- Asal Sekolah --}}
                            <div
                                class="form-group
                            {{ $errors->has('school_origin') ? 'has-error' : '' }}">
                                <label for="school_origin">Asal Sekolah</label>
                                <input type="text" name="school_origin" class="form-control"
                                    placeholder="Enter student school origin">
                                <span class="text-danger">{{ $errors->first('school_origin') }}</span>
                            </div>

                            {{-- NPSN Sekolah --}}
                            <div
                                class="form-group
                            {{ $errors->has('school_npsn') ? 'has-error' : '' }}">
                                <label for="school_npsn">NPSN Sekolah</label>
                                <input type="text" name="school_npsn" class="form-control"
                                    placeholder="Masukkan NPSN Sekolah">
                                <span class="text-danger">{{ $errors->first('school_npsn') }}</span>
                            </div>

                            {{-- No. KK --}}
                            <div
                                class="form-group
                            {{ $errors->has('kk_number') ? 'has-error' : '' }}">
                                <label for="kk_number">No. KK</label>
                                <input type="text" name="kk_number" class="form-control"
                                    placeholder="Enter student kk number">
                                <span class="text-danger">{{ $errors->first('kk_number') }}</span>
                            </div>

                            {{-- NIK --}}
                            <div
                                class="form-group
                            {{ $errors->has('nik') ? 'has-error' : '' }}">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control"
                                    placeholder="Enter student nik">
                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                            </div>

                        </div>
                    </div>

                    {{-- Button untuk lanjut ke Form Data Orangtua --}}
                    <div
                        class="form-group
                            {{ $errors->has('parent_data') ? 'has-error' : '' }}">
                        <button type="submit" class="btn btn-md btn-primary mt-3">Lanjut Isi Data Orangtua</button>
                        <span class="text-danger">{{ $errors->first('parent_data') }}</span>
                    </div>

                </div>
        </form>
    </div>

@endsection
