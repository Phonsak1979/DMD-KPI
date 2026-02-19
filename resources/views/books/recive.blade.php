@extends('layouts.template')

@section('title', 'หนังสือรับ')

@section('content')
    <div class="container-fluid p-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex" style="font-family: 'Mitr', sans-serif; font-size: 24px;">
                        ทะเบียนหนังสือรับ
                        <a href="#" class="btn btn-primary ml-auto"><i
                                class="fas fa-folder-plus mr-2"></i>ลงรับหนังสือ</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-2 category-filter pb-3 text-center">
                            <select id="statusFilter" class="form-control">
                                <option value="">สถานะหนังสือ</option>
                                <option value="0">เสนอฝ่าย</option>
                                <option value="1">เสนอผู้บริหาร</option>
                                <option value="2">ลงนามแล้ว</option>
                            </select>
                        </div>
                        <table id="BookRecive" class="table table-hover" style="font-size: 14px">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 10%;">เลขทะเบียน</th>
                                    <th style="width: 10%;">เลขที่หนังสือ</th>
                                    <th style="width: 40%;">เรื่อง</th>
                                    <th style="width: 20%;">จากหน่วยงาน</th>
                                    <th style="width: 10%;">วันที่ลงรับ</th>
                                    <th style="width: 10%;">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">15</td>
                                    <td>อบ 0033.011/ว10653</td>
                                    <td>ขอประชาสัมพันธ์หลักสูตร เรือธง กรมอนามัย ประจำปีงบประมาณ 2568</td>
                                    <td>อนามัยสิ่งแวดล้อมและอาชีวอนามัย(สสจ.)</td>
                                    <td>28 ต.ค. 2567</td>
                                    <td><span class="badge bg-danger">เสนอฝ่าย</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">14</td>
                                    <td>อบ 0033.002/ว6880</td>
                                    <td>ส่งข้อมูลโรงพยาบาลส่งเสริมสุขภาพตำบลที่ถ่ายโอนภารกิจให้แก่องค์กรปกครองส่วนท้องถิ่นจังหวัดอุบลราชธานี
                                    </td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>28 ต.ค. 2567</td>
                                    <td><span class="badge bg-danger">เสนอฝ่าย</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">13</td>
                                    <td>อบ 0033.017/ว10638</td>
                                    <td>แจ้งปรับปรุงรหัสมาตรฐาน ตามโครงสร้างมาตรฐานข้อมูลด้านสุขภาพ กระทรวงสาธารณสุข (แฟ้ม
                                        Special PP)</td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>28 ต.ค. 2567</td>
                                    <td><span class="badge bg-danger">เสนอฝ่าย</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">12</td>
                                    <td>อบ 0033.002/ว10630</td>
                                    <td>ขอเชิญประชุมคณะกรรมการวางแผนและประเมินผล กวป.</td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>28 ต.ค. 2567</td>
                                    <td><span class="badge bg-danger">เสนอฝ่าย</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">11</td>
                                    <td>อบ 0033.002/ว10620</td>
                                    <td>ขอให้ส่งรายชื่อคณะกรรมการประสานงานสาธารณสุขระดับอำเภอ (คปสอ)</td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>25 ต.ค. 2567</td>
                                    <td><span class="badge bg-warning">เสนอผู้บริหาร</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td>อบ 0033.002/ว10637</td>
                                    <td>แจ้งยุทธศาสตร์การพัฒนางานสาธารณสุข แผนงาน โครงการ และตัวชี้วัดกระทรวงสาธารณสุข
                                        ปีงบประมาณ 2568</td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>25 ต.ค. 2567</td>
                                    <td><span class="badge bg-warning">เสนอผู้บริหาร</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td>อบ 0033.011/ว10590</td>
                                    <td>ขอเชิญเข้ารับการอบรมหลักสูตรพื้นฐานการจัดการเหตุรำคาญ ประจำปีงบประมาณ 2568</td>
                                    <td>อนามัยสิ่งแวดล้อมและอาชีวอนามัย(สสจ.)</td>
                                    <td>25 ต.ค. 2567</td>
                                    <td><span class="badge bg-warning">เสนอผู้บริหาร</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td>อบ 0033.017/ว10543</td>
                                    <td>ขอประชาสัมพันธ์การสัมมนาในหัวข้อ ระบบรักษาความปลอดภัยในเครือข่ายและการสำรองข้อมูล
                                        (Security and Data Backup) (กำหนดการ)</td>
                                    <td>กลุ่มานสุขภาพดิจิตอล(สสจ.)</td>
                                    <td>25 ต.ค. 2567</td>
                                    <td><span class="badge bg-warning">เสนอผู้บริหาร</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>อบ 0033.002/ว10525</td>
                                    <td>ขอเชิญร่วมพิธีและรับมอบครุภัณฑ์การแพทย์ </td>
                                    <td>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>อบ 0033.011/ว10594</td>
                                    <td>ขอส่งสรุปผลการตรวจประเมินการดำเนินงานพัฒนาอนามัยสิ่งแวดล้อมในสถานพยาบาลจังหวัดอุบลราชธานี
                                        ประจำปีงบประมาณ2567</td>
                                    <td>อนามัยสิ่งแวดล้อมและอาชีวอนามัย(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>อบ 0033.012/ว10625</td>
                                    <td>เชิญประชุมการบันทึกข้อมูลผู้ป่วยนิติจิตเวช</td>
                                    <td>กลุ่มงานโรคไม่ติดต่อ สุขภาพจิตและยาเสพติด(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>อบ 0033.012/ว10624</td>
                                    <td>การบันทึกข้อมูลผู้ป่วยนิติจิตเวชหรือผู้ป่วยที่มีปัญหาสุขภาพจิตที่มีคดี</td>
                                    <td>กลุ่มงานโรคไม่ติดต่อ สุขภาพจิตและยาเสพติด(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>อบ 0033.004/ว10456</td>
                                    <td>ขอความร่วมมือรายงานผลการดำเนินงานตรวจคัดกรองไวรัสตับอักเสบ บี และ ซี
                                        ในกลุ่มประชากรเป้าหมายที่เข้าสู่กระบวนการรักษา ในปีงบประมาณ 2567</td>
                                    <td>กลุ่มงาน ควบคุมโรคติดต่อ (สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>อบ 0032.01/ว400</td>
                                    <td>ขอเชิญเข้ารับการประเมิน ตำแหน่งชำนาญการพิเศษ</td>
                                    <td>กลุ่มงานบริหารทรัพยากรบุคคล(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>อบ 0033.001/ว10571</td>
                                    <td>ประชาสัมพันธ์</td>
                                    <td>กลุ่มงานบริหารทั่วไป(สสจ.)</td>
                                    <td>24 ต.ค. 2567</td>
                                    <td><span class="badge bg-success">ลงนามแล้ว</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    <!-- Page Datatable Script -->
    <script>
        $(function() {
            $("#BookRecive").DataTable({
                // "pageLength": 5,
                // "lengthMenu": [5, 10, 20, 50],
                "language": {
                    "search": "ค้นหา : ",
                    "lengthMenu": "แสดง _MENU_ รายการ"
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
