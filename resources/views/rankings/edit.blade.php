@extends('layouts.template')

@section('title', 'แก้ไขตัวชี้วัด (KPI)')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-list"></i> แก้ไขตัวชี้วัด (KPI)</h3>
                    </div>
                    <form action="{{ route('rankings.update', $ranking->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="r_main">รหัส R หลัก</label>
                                <input type="text" name="r_main" class="form-control" id="r_main"
                                    value="{{ $ranking->r_main }}" placeholder="รหัส R หลัก เช่น R1- R62">
                                @error('r_main')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="r_sub">รหัส R ย่อย</label>
                                <input type="text" name="r_sub" class="form-control" id="r_sub"
                                    value="{{ $ranking->r_sub }}" placeholder="รหัส R ย่อย เช่น R1.1- R1.5">
                                @error('r_sub')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">ชื่อตัวชี้วัด</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $ranking->title }}"
                                    placeholder="ชื่อตัวชี้วัด เช่น ระดับความสำเร็จในการบริหารจัดการให้ประชาชนเข้าถึง
บริการฟอกไตฟรี">
                            </div>
                            <div class="form-group">
                                <label for="url">URL : OPEN DATA</label>
                                <input type="text" name="url" class="form-control" id="url"
                                    value="{{ $ranking->url }}" placeholder="URL ชื่อตาราง เช่น s_kpi_anc12 ">
                                @error('url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="department_code">กลุ่มงาน/ฝ่าย</label>
                                <select name="department_code" id="department_code" class="form-control">
                                    <option value="">เลือกกลุ่มงาน/ฝ่าย</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->department_code }}"
                                            {{ $department->department_code == $ranking->department_code ? 'selected' : '' }}>
                                            {{ $department->department_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="target">TARGET : เป้าหมาย</label>
                                <input type="text" name="target" class="form-control" id="target"
                                    value="{{ $ranking->target }}"
                                    placeholder="เป้าหมาย เช่น จำนวนคน หรือ รพ.สต. เป็นจำนวนเต็ม">
                                @error('target')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="result">RESULT : ผลงาน</label>
                                <input type="text" name="result" class="form-control" id="result"
                                    value="{{ $ranking->result }}"
                                    placeholder="ผลงาน เช่น จำนวนคน หรือ รพ.สต. เป็นจำนวนเต็ม">
                                @error('result')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="target_value">TARGET VALUE : ค่าเป้าหมาย</label>
                                <input type="text" name="target_value" class="form-control" id="target_value"
                                    value="{{ $ranking->target_value }}"
                                    placeholder="ค่าเป้าหมาย เช่น มากกว่า ร้อยละ 80 หรือ น้อยกว่า ร้อยละ 20 เป็นจำนวนเต็ม">
                                @error('target_value')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                            <a href="{{ session('ranking_url', route('rankings.index')) }}" class="btn btn-warning"><i class="fas fa-undo-alt"></i>
                                กลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
