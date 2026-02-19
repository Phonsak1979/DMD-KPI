@extends('layouts.template')

@section('title', 'ผู้ใช้งานระบบ')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-user"></i> รายชื่อผู้ใช้งานระบบ</h3>

                    </div>
                    <div class="card-body">
                        <a href="{{ route('users.create') }}" class="btn btn-outline-success float-left"><i
                                class="fas fa-plus"></i> เพิ่มผู้ใช้งานระบบ</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th>ชื่อผู้ใช้งาน</th>
                                    <th>E-MAIL</th>
                                    <th class="text-center">ROLE</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $users->firstItem() + $loop->index }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td><span class="badge badge-info">{{ $user->email }}</span>
                                        </td>
                                        <td class="text-center">
                                            @if ($user->role == 'admin')
                                                <span class="badge badge-primary">{{ $user->role }}</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $user->role }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($user->status == 'active')
                                                <span class="badge badge-success">{{ $user->status }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm delete-confirm"
                                                    data-toggle="tooltip" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="float-left ml-2">
                    รายการที่ {{ $users->firstItem() }} - {{ $users->lastItem() }} จาก
                    {{ $users->total() }} รายการ
                </div>
                <div class="float-right">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
