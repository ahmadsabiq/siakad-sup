@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Orangtua</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-responsive-md">
            <thead>
                <tr>
                    <th style="width:50px;">
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th><strong>ROLL NO.</strong></th>
                    <th><strong>NAME</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong></strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                            <label class="form-check-label" for="customCheckBox2"></label>
                        </div>
                    </td>
                    <td><strong>542</strong></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt="">
                            <span class="w-space-no">Dr. Jackson</span>
                        </div>
                    </td>
                    <td>example@example.com </td>
                    <td>01 August 2020</td>
                    <td>
                        <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                    class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                            <label class="form-check-label" for="customCheckBox3"></label>
                        </div>
                    </td>
                    <td><strong>542</strong></td>
                    <td>
                        <div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg me-2"
                                width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                    </td>
                    <td>example@example.com </td>
                    <td>01 August 2020</td>
                    <td>
                        <div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                    class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                            <label class="form-check-label" for="customCheckBox4"></label>
                        </div>
                    </td>
                    <td><strong>542</strong></td>
                    <td>
                        <div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg me-2"
                                width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                    </td>
                    <td>example@example.com </td>
                    <td>01 August 2020</td>
                    <td>
                        <div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                    class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
