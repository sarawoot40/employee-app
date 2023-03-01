<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testbody;
use App\Models\testtheory;
use App\Models\testact;

class TestbodyController extends Controller
{
    public function index($id){
        return view('alltest',compact('id'));
    }

    public function store(Request $request){
        //ตรวจสอบข้อมูล
        /*$request->validate([
            'user_fname'=>'required|unique:use_tests|max:255',
            'user_lname'=>'required|unique:use_tests|max:255'
        ]);*/
        //บันทึก
        $user_test = new testbody;
        $user_test->user_id = $request->id;
        $user_test->body_test1 = $request->body_test1;
        $user_test->body_test2 = $request->body_test2;
        $user_test->body_test3 = $request->body_test3;
        $user_test->body_test4 = $request->body_test4;
        $sum_body = $user_test->body_test1 + $user_test->body_test2 + $user_test->body_test3 + $user_test->body_test4;
        if($sum_body >= 3){
            $user_test->body_status = 1;
        }else{
            $user_test->body_status = 0;
        }
        $user_test->save();
        
        $user_test_2 = new testtheory;
        $user_test_2->user_id = $request->id;
        $user_test_2->theory_test1 = $request->theory_test1;
        $user_test_2->theory_test2 = $request->theory_test2;
        $user_test_2->theory_test3 = $request->theory_test3;
        $sum_theory = $user_test_2->theory_test1 + $user_test_2->theory_test2 + $user_test_2->theory_test3;
        if($sum_body > 120){
            $user_test_2->theory_status = 1;
        }else{
            $user_test_2->theory_status = 0;
        }
        $user_test->save();
        
        $user_test_3 = new testact;
        $user_test_3->user_id = $request->id;
        $user_test_3->act_test1 = $request->act_test1;
        $user_test_3->act_status = $request->act_test1;
        $user_test_3->save();

        return redirect()->route('adduser')->with('success',"บันทึกข้อมูลเรียบร้อย");
    }
}
