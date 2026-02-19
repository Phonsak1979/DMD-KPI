@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="content">
                    <div class="container-fluid">

                        <div class="row"> <!-- row 1 small box-->
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{ $hospitals->count() }}</h3>
                                        <p>จำนวน หน่วยบริการ</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-hospital-alt"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">รายละเอียด <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>62</h3>
                                        <p>จำนวน HDC-KPI</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">รายละเอียด <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>12</h3>
                                        <p>จำนวน KPI ที่ผ่านเกณฑ์</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">รายละเอียด <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>50</h3>
                                        <p>จำนวน KPI ที่ไม่ผ่านเกณฑ์</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">รายละเอียด <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row"> <!-- row 2 bar chart -->
                            <div class="col-lg-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">กราฟแสดงร้อยละผลการดำเนินงาน HDC-KPI</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="barChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row"> <!-- row 3 table -->
                            <div class="col-lg-12">
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">ตารางแสดงผลการดำเนินงาน HDC-KPI</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 10px">R</th>
                                                        <th>รายการตัวชี้วัด</th>
                                                        <th class="text-center">เป้าหมาย</th>
                                                        <th class="text-center">ผลงาน</th>
                                                        <th class="text-center">ร้อยละผลงาน</th>
                                                        <th class="text-center">รายละเอียด</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">R3</td>
                                                        <td>
                                                            <div>
                                                                R3.3 : ร้อยละของหญิงตั้งครรภ์ได้รับบริการฝากครรภ์คุณภาพ
                                                            </div>
                                                            <div class="badge bg-info ">
                                                                ส่งเสริมสุขภาพ
                                                            </div>
                                                        </td>
                                                        <td class="text-center">28</td>
                                                        <td class="text-center">7</td>
                                                        <td class="text-center"><span class="badge bg-danger">25.00%</span>
                                                        </td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">R3</td>
                                                        <td>
                                                            <div>
                                                                R3.4 : ร้อยละหญิงตั้งครรภ์ได้รับการฝากครรภ์ครั้งแรกก่อนหรือเท่ากับ 12 สัปดาห์
                                                            </div>
                                                            <div class="badge bg-info ">
                                                                ส่งเสริมสุขภาพ
                                                            </div>
                                                        </td>
                                                        <td class="text-center">28</td>
                                                        <td class="text-center">21</td>
                                                        <td class="text-center"><span class="badge bg-warning">75.00%</span>
                                                        </td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">R3</td>
                                                        <td>
                                                            <div>R3.5 : ร้อยละหญิงตั้งครรภ์ที่ได้รับการดูแลก่อนคลอด 5 ครั้ง
                                                            </div>
                                                            <div class="badge bg-info ">
                                                                ส่งเสริมสุขภาพ
                                                            </div>
                                                        </td>
                                                        <td class="text-center">28</td>
                                                        <td class="text-center">17</td>
                                                        <td class="text-center"><span class="badge bg-warning">60.71%</span>
                                                        </td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">R29</td>
                                                        <td>
                                                            <div>
                                                                R29.1 : ร้อยละของประชากรอายุ 35
                                                                ปีขึ้นไปที่ได้รับการคัดกรองเพื่อวินิจฉัยเบาหวาน
                                                            </div>
                                                            <div class="badge bg-info ">
                                                                NCD สุขภาพจิตและยาเสพติด
                                                            </div>
                                                        </td>
                                                        <td class="text-center">8,837</td>
                                                        <td class="text-center">2,535</td>
                                                        <td class="text-center"><span class="badge bg-danger">28.69%</span>
                                                        </td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">R29</td>
                                                        <td>
                                                            <div>R29.2 : ร้อยละของประชากรอายุ 35
                                                                ปีขึ้นไปที่ได้รับการคัดกรองเพื่อวินิจฉัยโรคความดัน</div>
                                                            <div class="badge bg-info ">
                                                                NCD สุขภาพจิตและยาเสพติด
                                                            </div>
                                                        </td>
                                                        <td class="text-center">7,683</td>
                                                        <td class="text-center">2,349</td>
                                                        <td class="text-center"><span class="badge bg-danger">30.57%</span>
                                                        </td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">R29</td>
                                                        <td>
                                                            <div>
                                                                R29.3 : ร้อยละการตรวจติดตามยืนยันวินิจฉัยกลุ่มสงสัยป่วยโรคเบาหวาน
                                                            </div>
                                                            <div class="badge bg-info ">
                                                                NCD สุขภาพจิตและยาเสพติด
                                                            </div>
                                                        </td>
                                                        <td class="text-center">53</td>
                                                        <td class="text-center">13</td>
                                                        <td class="text-center"><span
                                                                class="badge bg-danger">24.53%</span></td>
                                                        <td class="text-center"><a href="#"
                                                                class="text-primary">รายละเอียด ></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
