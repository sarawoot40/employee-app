<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alltestcar;
use App\Models\Use_test;

class AlltestcarController extends Controller
{
    public function index($id){
        $edittests = Alltestcar::find($id);
        // dd($edittests);
            return view('alltest',compact('edittests','id'));
    }

    public function store(Request $request){
        $edittests = Alltestcar::find($request->id);
        //dd($request);
        //ตรวจสอบข้อมูล
        /*$request->validate([
            'user_fname'=>'required|unique:use_tests|max:255',
            'user_lname'=>'required|unique:use_tests|max:255'
        ]);*/
        //บันทึก
        //$user_test = new Alltestcar;
        $edittests->user_id = $request->id;
        $edittests->body_test1 = $request->body_test1;
        $edittests->body_test2 = $request->body_test2;
        $edittests->body_test3 = $request->body_test3;
        $edittests->body_test4 = $request->body_test4;
        $edittests->theory_test1 = $request->theory_test1;
        $edittests->theory_test2 = $request->theory_test2;
        $edittests->theory_test3 = $request->theory_test3;
        $edittests->act_test1 = $request->act_test1;
        $edittests->save();

        return redirect()->route('adduser')->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function results(){
        $jointest = Use_test::leftjoin("alltestcars","use_tests.id","=","alltestcars.user_id")
        ->select("use_tests.*","alltestcars.*")->paginate(5);
        //$jointest = $abcd->paginate(5);
        //dd($user_test);
        return view('/results',compact('jointest'));
    }

    // public function edittest($id){
    //     $edittests = Alltestcar::find($id);
    //     //dd($edittests);
    //         return view('alltest',compact('edittests','id'));

    // }
}
