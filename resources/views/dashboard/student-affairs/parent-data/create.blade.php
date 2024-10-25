@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendaftaran Santri</h1>
    </div>

    <div class="row">
        <form action="{{ route('student-affairs.students.index') }}" method="GET">
            @csrf
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>C. DATA PRIBADI ORANG TUA SANTRI</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('nama_ayah') ? 'has-error' : '' }}">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control"
                                        placeholder="Nama Ayah" value="{{ old('nama_ayah') }}">
                                    @if ($errors->has('nama_ayah'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('nama_ayah') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('nama_ibu') ? 'has-error' : '' }}">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control"
                                        placeholder="Nama Ibu" value="{{ old('nama_ibu') }}">
                                    @if ($errors->has('nama_ibu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('nama_ibu') }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- Tempat tanggal Lahir --}}

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('tempat_lahir_ayah') ? 'has-error' : '' }}">
                                    <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                                    <input type="text" name="tempat_lahir_ayah" id="tempat_lahir_ayah"
                                        class="form-control" placeholder="Tempat Lahir Ayah"
                                        value="{{ old('tempat_lahir_ayah') }}">
                                    @if ($errors->has('tempat_lahir_ayah'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('tempat_lahir_ayah') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('tempat_lahir_ibu') ? 'has-error' : '' }}">
                                    <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                    <input type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control"
                                        placeholder="Tempat Lahir Ibu" value="{{ old('tempat_lahir_ibu') }}">
                                    @if ($errors->has('tempat_lahir_ibu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('tempat_lahir_ibu') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('tanggal_lahir_ayah') ? 'has-error' : '' }}">
                                    <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                                    <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah"
                                        class="form-control" placeholder="Tanggal Lahir Ayah"
                                        value="{{ old('tanggal_lahir_ayah') }}">
                                    @if ($errors->has('tanggal_lahir_ayah'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('tanggal_lahir_ayah') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('tanggal_lahir_ibu') ? 'has-error' : '' }}">
                                    <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                    <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu"
                                        class="form-control" placeholder="Tanggal Lahir Ibu"
                                        value="{{ old('tanggal_lahir_ibu') }}">
                                    @if ($errors->has('tanggal_lahir_ibu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('tanggal_lahir_ibu') }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- Pekerjaan dan Pendidikan Terakhir --}}
                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('pekerjaan_ayah') ? 'has-error' : '' }}">
                                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control"
                                        placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}">
                                    @if ($errors->has('pekerjaan_ayah'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('pekerjaan_ayah') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('pekerjaan_ibu') ? 'has-error' : '' }}">
                                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control"
                                        placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}">
                                    @if ($errors->has('pekerjaan_ibu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('pekerjaan_ibu') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('pendidikan_ayah') ? 'has-error' : '' }}">
                                    <label for="pendidikan_ayah">Pendidikan Terakhir Ayah</label>
                                    <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control"
                                        placeholder="Pendidikan Terakhir Ayah" value="{{ old('pendidikan_ayah') }}">
                                    @if ($errors->has('pendidikan_ayah'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('pendidikan_ayah') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('pendidikan_ibu') ? 'has-error' : '' }}">
                                    <label for="pendidikan_ibu">Pendidikan Terakhir Ibu</label>
                                    <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control"
                                        placeholder="Pendidikan Terakhir Ibu" value="{{ old('pendidikan_ibu') }}">
                                    @if ($errors->has('pendidikan_ibu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('pendidikan_ibu') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('no_hp_ortu') ? 'has-error' : '' }}">
                                    <label for="no_hp_ortu">No. HP Orang Tua</label>
                                    <input type="text" name="no_hp_ortu" id="no_hp_ortu" class="form-control"
                                        placeholder="No. HP Orang Tua" value="{{ old('no_hp_ortu') }}">
                                    @if ($errors->has('no_hp_ortu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('no_hp_ortu') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div
                                    class="form-group
                                    {{ $errors->has('email_ortu') ? 'has-error' : '' }}">
                                    <label for="email_ortu">Email Orang Tua</label>
                                    <input type="text" name="email_ortu" id="email_ortu" class="form-control"
                                        placeholder="Email Orang Tua" value="{{ old('email_ortu') }}">
                                    @if ($errors->has('email_ortu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('email_ortu') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div
                                    class="form-group

                                    {{ $errors->has('alamat_ortu') ? 'has-error' : '' }}">
                                    <label for="alamat_ortu">Alamat Orang Tua</label>
                                    <textarea name="alamat_ortu" id="alamat_ortu" class="form-control" placeholder="Alamat Orang Tua">{{ old('alamat_ortu') }}</textarea>
                                    @if ($errors->has('alamat_ortu'))
                                        <span
                                            class="help-block
                                            text-danger">{{ $errors->first('alamat_ortu') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>



@endsection
