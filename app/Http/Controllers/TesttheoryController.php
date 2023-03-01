<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesttheoryController extends Controller
{
    public function store(Request $request ,$id){
        //ตรวจสอบข้อมูล
        /*$request->validate([
            'user_fname'=>'required|unique:use_tests|max:255',
            'user_lname'=>'required|unique:use_tests|max:255'
        ]);*/
        //บันทึก
        // $user_test = new Use_test;
        // $user_test->user_id = $id;
        // $user_test->theory_test1 = $request->theory_test1;
        // $user_test->theory_test2 = $request->theory_test2;
        // $user_test->theory_test2 = $request->theory_test3;
        // $sum_body = ($user_test->body_test1+$user_test->body_test2+$user_test->body_test3+$user_test->body_test4)*80/100;
        // if($sum_body > 120){
        //     $user_test->user_status = 1;
        // }else{
        //     $user_test->user_status = 0;
        // }
        // $user_test->save();
        //return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }
}
