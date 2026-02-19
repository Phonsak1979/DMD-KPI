@extends('layouts.template')

@section('title', 'กลุ่มงาน/ฝ่าย')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-hospital-alt"></i> รายชื่อกลุ่มงาน/ฝ่าย</h3>

                    </div>
                    <div class="card-body">
                        <a href="{{ route('departments.create') }}" class="btn btn-outline-success float-left"><i
                                class="fas fa-plus"></i> เพิ่มกลุ่มงาน/ฝ่าย</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">รหัสกลุ่มงาน/ฝ่าย</th>
                                    <th>ชื่อกลุ่มงาน/ฝ่าย</th>
                                    <th class="text-center">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td class="text-center">{{ $departments->firstItem() + $loop->index }}</td>
                                        <td class="text-center"><span
                                                class="badge badge-info">{{ $department->department_code }}</span></td>
                                        <td>{{ $department->department_name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('departments.show', $department->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('departments.edit', $department->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('departments.destroy', $department->id) }}"
                                                class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="float-left">
                    รายการที่ {{ $departments->firstItem() }} - {{ $departments->lastItem() }} จาก
                    {{ $departments->total() }} รายการ
                </div>
                <div class="float-right">
                    {{ $departments->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
