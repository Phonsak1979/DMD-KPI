@extends('layouts.template')

@section('title', 'ตัวชี้วัด (KPI)')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-list"></i> รายชื่อตัวชี้วัด (KPI)</h3>

                    </div>
                    <div class="card-body">
                        <a href="{{ route('rankings.create') }}" class="btn btn-outline-success float-left"><i
                                class="fas fa-plus"></i> เพิ่มตัวชี้วัด (KPI)</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">R</th>
                                    <th class="text-center">R-Sub</th>
                                    <th>ชื่อตัวชี้วัด</th>
                                    <th>กลุ่มงาน/ฝ่าย</th>
                                    <th class="text-center">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rankings as $ranking)
                                    <tr>
                                        <td class="text-center">{{ $rankings->firstItem() + $loop->index }}</td>
                                        <td class="text-center"><span class="badge badge-info">R{{ $ranking->r_main }}</span>
                                        </td>
                                        <td class="text-center"><span class="badge badge-warning">{{ $ranking->r_sub }}</span>
                                        </td>
                                        <td>{{ $ranking->title }}</td>
                                        <td class="text-sm"><span class="badge badge-light">{{ $ranking->department->department_name ?? $ranking->department_code }}</span></td>
                                        <td class="text-center">
                                            <a href="{{ route('rankings.show', $ranking->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('rankings.edit', $ranking->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('rankings.destroy', $ranking->id) }}" method="POST"
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
                    รายการที่ {{ $rankings->firstItem() }} - {{ $rankings->lastItem() }} จาก
                    {{ $rankings->total() }} รายการ
                </div>
                <div class="float-right">
                    {{ $rankings->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
