@extends('layouts.template')

@section('title', 'Show_Hospital')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-info">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-hospital-alt"></i> รายละเอียดหน่วยบริการ</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="hospcode">รหัสหน่วยบริการ</label>
                            <input type="text" class="form-control" id="hospcode" value="{{ $hospital->hospcode }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="hospname">ชื่อหน่วยบริการ</label>
                            <input type="text" class="form-control" id="hospname" value="{{ $hospital->hospname }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="district_code">รหัสอำเภอ</label>
                            <input type="text" class="form-control" id="district_code"
                                value="{{ $hospital->district_code }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="province_code">รหัสจังหวัด</label>
                            <input type="text" class="form-control" id="province_code"
                                value="{{ $hospital->province_code }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="zone_code">รหัสเขตสุขภาพ</label>
                            <input type="text" class="form-control" id="zone_code" value="{{ $hospital->zone_code }}"
                                readonly>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ session('hospital_url', route('hospitals.index')) }}" class="btn btn-warning"><i
                                class="fas fa-undo-alt"></i> กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
