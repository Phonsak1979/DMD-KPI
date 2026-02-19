@extends('layouts.template')

@section('title', 'รายละเอียดผู้ใช้งานระบบ')

@section('content')
    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">รายละเอียดผู้ใช้งาน</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ชื่อ-นามสกุล:</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">อีเมล:</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">สิทธิ์การใช้งาน:</label>
                            <div class="col-sm-9">
                                <span class="badge badge-warning">{{ $user->role }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">สถานะ:</label>
                            <div class="col-sm-9">
                                @if ($user->status == 'active')
                                    <span class="badge badge-success">{{ $user->status }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $user->status }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">วันที่สร้าง:</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">{{ $user->created_at->format('d/m/Y H:i:s') }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">แก้ไขล่าสุด:</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">{{ $user->updated_at->format('d/m/Y H:i:s') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">แก้ไข</a>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
