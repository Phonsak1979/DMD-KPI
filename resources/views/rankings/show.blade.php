@extends('layouts.template')

@section('title', 'รายละเอียดตัวชี้วัด (KPI)')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-info">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-list"></i> รายละเอียดตัวชี้วัด (KPI)</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="r_main">รหัส R หลัก</label>
                            <input type="text" class="form-control" id="r_main" value="{{ $ranking->r_main }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="r_sub">รหัส R ย่อย</label>
                            <input type="text" class="form-control" id="r_sub" value="{{ $ranking->r_sub }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">ชื่อตัวชี้วัด</label>
                            <input type="text" class="form-control" id="title" value="{{ $ranking->title }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="url">URL : OPEN DATA</label>
                            <input type="text" class="form-control" id="url" value="{{ $ranking->url }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="department_code">กลุ่มงาน/ฝ่าย</label>
                            <input type="text" class="form-control" id="department_code"
                                value="{{ $ranking->department->department_name ?? $ranking->department_code }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="target">TARGET : เป้าหมาย</label>
                            <input type="text" class="form-control" id="target" value="{{ $ranking->target }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="result">RESULT : ผลงาน</label>
                            <input type="text" class="form-control" id="result" value="{{ $ranking->result }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="target_value">TARGET VALUE : ค่าเป้าหมาย</label>
                            <input type="text" class="form-control" id="target_value"
                                value="{{ $ranking->target_value }}" readonly>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ session('ranking_url', route('rankings.index')) }}" class="btn btn-warning"><i class="fas fa-undo-alt"></i>
                            กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
