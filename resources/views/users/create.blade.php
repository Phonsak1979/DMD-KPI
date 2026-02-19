@extends('layouts.template')

@section('title', 'เพิ่มผู้ใช้งานระบบ')

@section('content')
    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-plus"></i> เพิ่มผู้ใช้งานระบบ</h3>
                    </div>
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="เช่น นายสมชาย รักชาติ" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-MAIL (ใช้สำหรับเข้าสู่ระบบ)</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">PASSWORD</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="รหัสผ่าน (อย่างน้อย 8 ตัวอักษร)" required minlength="8">
                            </div>
                            <div class="form-group">
                                <label for="role">ROLE</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">STATUS</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                            <a href="{{ route('users.index') }}" class="btn btn-warning"><i
                                    class="fas fa-undo-alt"></i> ย้อนกลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
