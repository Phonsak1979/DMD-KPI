<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        session(['hospital_url' => request()->fullUrl()]);
        $hospitals = Hospital::paginate(5);
        return view('hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hospcode' => 'required|unique:hospitals',
            'hospname' => 'required',
            'district_code' => 'required',
            'province_code' => 'required',
            'zone_code' => 'required',
        ], [
            'hospcode.unique' => 'รหัสหน่วยบริการนี้มีในระบบแล้ว',
            'hospcode.required' => 'กรุณากรอกรหัสหน่วยบริการ',
            'hospname.required' => 'กรุณากรอกชื่อหน่วยบริการ',
            'district_code.required' => 'กรุณากรอกรหัสอำเภอ',
            'province_code.required' => 'กรุณากรอกรหัสจังหวัด',
            'zone_code.required' => 'กรุณากรอกรหัสเขตสุขภาพ',
        ]);

        Hospital::create($request->all());

        return redirect()->to(session('hospital_url', route('hospitals.index')))
            ->with('success', 'บันทึกข้อมูลหน่วยบริการเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        return view('hospitals.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        return view('hospitals.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'hospcode' => 'required|unique:hospitals,hospcode,' . $hospital->id,
            'hospname' => 'required',
            'district_code' => 'required',
            'province_code' => 'required',
            'zone_code' => 'required',
        ], [
            'hospcode.unique' => 'รหัสหน่วยบริการนี้มีในระบบแล้ว',
            'hospcode.required' => 'กรุณากรอกรหัสหน่วยบริการ',
            'hospname.required' => 'กรุณากรอกชื่อหน่วยบริการ',
            'district_code.required' => 'กรุณากรอกรหัสอำเภอ',
            'province_code.required' => 'กรุณากรอกรหัสจังหวัด',
            'zone_code.required' => 'กรุณากรอกรหัสเขตสุขภาพ',
        ]);

        $hospital->update($request->all());

        return redirect()->to(session('hospital_url', route('hospitals.index')))
            ->with('success', 'แก้ไขข้อมูลหน่วยบริการเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->to(session('hospital_url', route('hospitals.index')))
            ->with('success', 'ลบข้อมูลหน่วยบริการเรียบร้อยแล้ว');
    }
}
