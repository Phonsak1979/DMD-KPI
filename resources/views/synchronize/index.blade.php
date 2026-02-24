@extends('layouts.template')

@section('title', 'Synchronize')

@section('content')
    <div class="container-fluid p-3">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card card-success">
                    <div class="card-header d-flex">
                        <h3 class="card-title"><i class="fas fa-sync-alt mr-1"></i> Synchronize HDC</h3>

                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-success float-left"><i class="fas fa-sync-alt mr-1"></i>
                            Sync All</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">ลำดับ</th>
                                    <th class="text-center" width="10%">Ranking</th>
                                    <th class="text-center" width="50%">ชื่อตัวชี้วัด (Title)</th>
                                    <th class="text-center" width="20%">URL</th>
                                    <th class="text-center" width="10%">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rankings as $ranking)
                                    <tr>
                                        <td class="text-center align-middle">{{ $rankings->firstItem() + $loop->index }}
                                        </td>
                                        <td class="text-center align-middle">
                                            <span class="badge badge-info"
                                                style="font-size: 14px;">R{{ $ranking->r_main }}</span>
                                        </td>
                                        <td class="align-middle">{{ $ranking->title }}</td>
                                        <td class="align-middle">
                                            @if ($ranking->url)
                                                <a href="{{ $ranking->url }}" target="_blank" class="text-info text-break">
                                                    {{ Str::limit($ranking->url, 50) }}
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-outline-success btn-sm"><i
                                                    class="fas fa-sync-alt"></i> Sync</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div class="">
                        รายการที่ {{ $rankings->firstItem() }} - {{ $rankings->lastItem() }} จาก {{ $rankings->total() }}
                        รายการ
                    </div>
                    <div class="">
                        {{ $rankings->links('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
