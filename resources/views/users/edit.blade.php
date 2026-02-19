@extends('layouts.template')

@section('title', 'แก้ไขข้อมูลผู้ใช้งาน')

@section('content')
    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-edit"></i> แก้ไขข้อมูลผู้ใช้งาน</h3>
                    </div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="ชื่อ-นามสกุล" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-MAIL (ใช้สำหรับเข้าสู่ระบบ)</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล"
                                    value="{{ $user->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">PASSWORD (ปล่อยว่างหากไม่ต้องการเปลี่ยน)</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="รหัสผ่าน (อย่างน้อย 8 ตัวอักษร)">
                            </div>
                            <div class="form-group">
                                <label for="role">ROLE</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">STATUS</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                            <a href="{{ route('users.index') }}" class="btn btn-warning"><i class="fas fa-undo"></i> ย้อนกลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
