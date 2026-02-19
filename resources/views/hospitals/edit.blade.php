@extends('layouts.template')

@section('title', 'แก้ไขหน่วยบริการ')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-hospital-alt"></i> แก้ไขหน่วยบริการ</h3>
                    </div>
                    <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hospcode">รหัสหน่วยบริการ</label>
                                <input type="text" name="hospcode" class="form-control" id="hospcode" value="{{ $hospital->hospcode }}" required>
                            </div>
                            <div class="form-group">
                                <label for="hospname">ชื่อหน่วยบริการ</label>
                                <input type="text" name="hospname" class="form-control" id="hospname" value="{{ $hospital->hospname }}" required>
                            </div>
                            <div class="form-group">
                                <label for="district_code">รหัสอำเภอ</label>
                                <input type="text" name="district_code" class="form-control" id="district_code" value="{{ $hospital->district_code }}" required>
                            </div>
                            <div class="form-group">
                                <label for="province_code">รหัสจังหวัด</label>
                                <input type="text" name="province_code" class="form-control" id="province_code" value="{{ $hospital->province_code }}" required>
                            </div>
                            <div class="form-group">
                                <label for="zone_code">รหัสเขตสุขภาพ</label>
                                <input type="text" name="zone_code" class="form-control" id="zone_code" value="{{ $hospital->zone_code }}" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> บันทึก</button>
                            <a href="{{ route('hospitals.index') }}" class="btn btn-outline-warning"><i class="fas fa-undo-alt"></i> กลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
