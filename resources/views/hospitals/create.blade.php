@extends('layouts.template')

@section('title', 'เพิ่มหน่วยบริการ')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-hospital-alt"></i> เพิ่มหน่วยบริการ</h3>
                    </div>
                    <form action="{{ route('hospitals.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hospcode">รหัสหน่วยบริการ</label>
                                <input type="text" name="hospcode" class="form-control" id="hospcode"
                                    placeholder="รหัสหน่วยบริการ 5 หลัก">
                                @error('hospcode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hospname">ชื่อหน่วยบริการ</label>
                                <input type="text" name="hospname" class="form-control" id="hospname"
                                    placeholder="ชื่อหน่วยบริการ เช่น รพ.สต.ดอนมดแดง">
                                @error('hospname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="district_code">รหัสอำเภอ</label>
                                <input type="text" name="district_code" class="form-control" id="district_code"
                                    placeholder="รหัสอำเภอ 4 หลัก">
                                @error('district_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="province_code">รหัสจังหวัด</label>
                                <input type="text" name="province_code" class="form-control" id="province_code"
                                    placeholder="รหัสจังหวัด 2 หลัก">
                                @error('province_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="zone_code">รหัสเขตสุขภาพ</label>
                                <input type="text" name="zone_code" class="form-control" id="zone_code"
                                    placeholder="รหัสเขตสุขภาพ 2 หลัก">
                                @error('zone_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                            <a href="{{ route('hospitals.index') }}" class="btn btn-warning"><i class="fas fa-undo-alt"></i> กลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
