@extends('layouts.template')

@section('title', 'หน่วยบริการ')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-hospital-alt"></i> รายชื่อหน่วยบริการ</h3>

                    </div>
                    <div class="card-body">
                        <a href="{{ route('hospitals.create') }}" class="btn btn-outline-success float-left"><i
                                class="fas fa-plus"></i> เพิ่มหน่วยบริการ</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ลำดับ</th>
                                    <th class="text-center">รหัสหน่วยบริการ</th>
                                    <th>ชื่อหน่วยบริการ</th>
                                    <th class="text-center">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hospitals as $hospital)
                                    <tr>
                                        <td class="text-center">{{ $hospitals->firstItem() + $loop->index }}</td>
                                        <td class="text-center"><span class="badge badge-info">{{ $hospital->hospcode }}</span></td>
                                        <td>{{ $hospital->hospname }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('hospitals.show', $hospital->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('hospitals.edit', $hospital->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST"
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
            </div>
        </div>
    </div>
@endsection
