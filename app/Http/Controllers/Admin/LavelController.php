<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Lavel;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LavelController extends Controller
{
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'lavel_name' => 'required|unique:lavels',
        ]);

        $lavel = new Lavel();
        $lavel->lavel_name = $request->lavel_name;
        $lavel->teacher_id = $request->teacher_id;
        $lavel->save();

        return redirect()->back();

    }
    public function list()
    {
        Session::put('page', 'lavel_list');
        $lavel = Lavel::get();
        $teacher = Teacher::orderBy('teachers_name')->get();
        return view('admin.class.create_class',compact('lavel','teacher'));
    }

    public function construction()
    {
        return view('admin.construction');
    }
}
