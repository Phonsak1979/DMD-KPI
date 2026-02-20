<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        session(['user_url' => request()->fullUrl()]);
        $users = \App\Models\User::paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email' . $request->id,
            'password' => 'required|min:8',
            'role' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'กรุณากรอกชื่อ-นามสกุล',
            'email.required' => 'กรุณากรอก E-MAIL',
            'email.email' => 'กรุณากรอก E-MAIL ที่ถูกต้อง',
            'email.unique' => 'E-MAIL นี้มีในระบบแล้ว',
            'password.required' => 'กรุณากรอก PASSWORD',
            'password.min' => ' PASSWORD ต้องมีอย่างน้อย 8 ตัวอักษร',
            'role.required' => 'กรุณาเลือก ROLE',
            'status.required' => 'กรุณาเลือก STATUS',
        ]);

        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect()->to(session('user_url', route('users.index')))->with('success', 'เพิ่มข้อมูลผู้ใช้งานเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'status' => 'required',
        ]);

        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect()->to(session('user_url', route('users.index')))->with('success', 'แก้ไขข้อมูลผู้ใช้งานเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'ลบข้อมูลผู้ใช้งานเรียบร้อยแล้ว');
    }
}
