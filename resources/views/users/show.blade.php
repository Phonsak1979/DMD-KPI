@extends('layouts.template')

@section('title', 'รายละเอียดผู้ใช้งาน')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-info">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-user-check"></i> รายละเอียดผู้ใช้งาน</h3>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">E-MAIL</label>
                            <input type="text" class="form-control" id="email" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="role">ROLE</label>
                            <input type="text" class="form-control" id="role" value="{{ $user->role }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS</label>
                            <input type="text" class="form-control" id="status" value="{{ $user->status }}" readonly>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ session('user_url', route('users.index')) }}" class="btn btn-warning"><i
                                class="fas fa-undo-alt"></i> กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
