<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComunicationController extends Controller
{
    public function smsAllStudentsTeachers()
    {
        return view('admin.comunication.sendAllStudentsTeachers');
    }
    public function smsAllStudents()
    {
        return view('admin.comunication.smssendAllStudent');
    }
    public function smsAllteachers()
    {
        return view('admin.comunication.smssendAllTeachers');
    }
    public function smsAllstaf()
    {
        return view('admin.comunication.smssendAllstaff');
    }
    public function smsSectionWish()
    {
        return view('admin.comunication.smssendAllstaff');
    }
}
