<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session(['department_url' => request()->fullUrl()]);
        $departments = Department::paginate(5);
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'department_code' => 'required|unique:departments,department_code,' . $request->id,
            'department_name' => 'required',
        ], [
            'department_code.required' => 'กรุณากรอกรหัสกลุ่มงาน/ฝ่าย',
            'department_code.unique' => 'รหัสกลุ่มงาน/ฝ่ายนี้มีในระบบแล้ว',
            'department_name.required' => 'กรุณากรอกชื่อกลุ่มงาน/ฝ่าย',
        ]);
        Department::create($request->all());
        return redirect()->to(session('department_url', route('departments.index')))
            ->with('success', 'เพิ่มข้อมูลกลุ่มงาน/ฝ่ายเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_code' => 'required|unique:departments,department_code,' . $department->id,
            'department_name' => 'required',

        ], [
            'department_code.required' => 'กรุณากรอกรหัสกลุ่มงาน/ฝ่าย',
            'department_code.unique' => 'รหัสกลุ่มงาน/ฝ่ายนี้มีในระบบแล้ว',
            'department_name.required' => 'กรุณากรอกชื่อกลุ่มงาน/ฝ่าย',
        ]);
        $department->update($request->all());
        return redirect(session('department_url', route('departments.index')))
            ->with('success', 'แก้ไขข้อมูลกลุ่มงาน/ฝ่ายเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect(session('department_url', route('departments.index')))
            ->with('success', 'ลบข้อมูลกลุ่มงาน/ฝ่ายเรียบร้อยแล้ว');
    }
}
