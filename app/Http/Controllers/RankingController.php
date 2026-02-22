<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session()->put('ranking_url', request()->fullUrl());
        $rankings = Ranking::with('department')->paginate(5);
        return view('rankings.index', compact('rankings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = \App\Models\Department::all();
        return view('rankings.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'r_main' => 'required',
            'r_sub' => 'nullable',
            'title' => 'required',
            'url' => 'nullable',
            'department_code' => 'required',
            'target' => 'nullable',
            'result' => 'nullable',
            'target_value' => 'nullable',
        ],[
            'r_main.required' => 'กรุณากรอกรหัส R หลัก',
            'title.required' => 'กรุณากรอกชื่อตัวชี้วัด',
            'department_code.required' => 'กรุณากรอกกลุ่มงาน/ฝ่าย',
        ]);


        Ranking::create($request->all());

        return redirect()->to(session('ranking_url', route('rankings.index')))
            ->with('success', 'บันทึกข้อมูลตัวชี้วัด (KPI) สำเร็จ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ranking $ranking)
    {
        return view('rankings.show', compact('ranking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ranking $ranking)
    {
        $departments = \App\Models\Department::all();
        return view('rankings.edit', compact('ranking', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ranking $ranking)
    {
        $request->validate([
            'r_main' => 'required',
            'r_sub' => 'nullable',
            'title' => 'required',
            'url' => 'nullable',
            'department_code' => 'required',
            'target' => 'nullable',
            'result' => 'nullable',
            'target_value' => 'nullable',
        ]);

        $ranking->update($request->all());

        return redirect()->to(session('ranking_url', route('rankings.index')))
            ->with('success', 'แก้ไขข้อมูลตัวชี้วัด (KPI) สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ranking $ranking)
    {
        $ranking->delete();

        return redirect()->to(session('ranking_url', route('rankings.index')))
            ->with('success', 'ลบข้อมูลตัวชี้วัด (KPI) สำเร็จ');
    }
}
