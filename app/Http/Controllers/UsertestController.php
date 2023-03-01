<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Use_test;
use App\Models\Alltestcar;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsertestController extends Controller
{
    public function home(){
        if(isset($_GET['query']))
        {
            $search_text = $_GET['query'];
            $jointest = Use_test::where('user_fname','like','%'.$search_text.'%')->orWhere('user_lname','like','%'.$search_text.'%')->orderByDesc('updated_at')->paginate(10);
        }else{
            $jointest = Use_test::orderByDesc('updated_at')->paginate(10);
        }
        $countdate = Use_test::whereDate('created_at', date('Y-m-d'))->get()->count();
        $countall = Use_test::all()->count();
        $allloop = Use_test::whereDate('created_at', date('Y-m-d'))->get();
        $alldata = Use_test::all();
        $a = 0;
        $b = 0;
        $c = 0;
                                    foreach($allloop as $row){
                                        if(isset($row->body_test1)){
                                                $sumbody=$row->body_test1+$row->body_test2+$row->body_test3+$row->body_test4;
                                                if($sumbody >= 3){
                                                   $valuebody = 1;
                                                }else{
                                                   $valuebody = 0;
                                                }
                                        }else{      
                                           $valuebody = "";
                                        }

                                        if(isset($row->theory_test1)){
                                                $sumtheory=$row->theory_test1+$row->theory_test2+$row->theory_test3;
                                                if($sumtheory > 120){
                                                    $valuetheory = 1;
                                                }else{
                                                    $valuetheory = 0;
                                                }
                                        }else{  
                                            $valuetheory = "";
                                        }

                                        if(isset($row->body_test1,$row->theory_test1,$row->act_test1)){
                                                $summer = $valuebody+$valuetheory+$row->act_test1;
                                                if($summer > 2){
                                                    $valuesum[] = 1;
                                                    $a++;
                                                }else{
                                                    $valuesum[] = 0;
                                                    $b++;
                                                }
                                        }else{
                                            $valuesum[] = "";
                                            $c++;
                                        }       
                                    }
                                    
        //dd($valuesum);                    
        return view('/home',compact('jointest','countdate','a','b','c','countall'));
    }

    // public function index(){
    //     return view('/adduser');
    // }

    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate([
            'user_fname'=>'required|unique:use_tests|max:255',
            'user_lname'=>'required|unique:use_tests|max:255'
        ]);
        //บันทึก
        $user_test = new Use_test;
        $user_test->user_fname = $request->user_fname;
        $user_test->user_lname = $request->user_lname;
        $user_test->body_test1 = $request->body_test1;
        $user_test->body_test2 = $request->body_test2;
        $user_test->body_test3 = $request->body_test3;
        $user_test->body_test4 = $request->body_test4;
        $user_test->theory_test1 = $request->theory_test1;
        $user_test->theory_test2 = $request->theory_test2;
        $user_test->theory_test3 = $request->theory_test3;
        $user_test->act_test1 = $request->act_test1;
        $user_test->save();
        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    public function edituser($id){
        //$jointest = Use_test::where('user_fname','LIKE','%'.$search_text .'%')->orderByDesc('updated_at')->paginate(10);
        $jointest = Use_test::orderByDesc('updated_at')->paginate(10);
        $edittests = Use_test::find($id);
        $countdate = Use_test::whereDate('created_at', date('Y-m-d'))->get()->count();
        $countall = Use_test::all()->count();
        $allloop = Use_test::whereDate('created_at', date('Y-m-d'))->get();
        $a = 0;
        $b = 0;
        $c = 0;
                                    foreach($allloop as $row){
                                        if(isset($row->body_test1)){
                                                $sumbody=$row->body_test1+$row->body_test2+$row->body_test3+$row->body_test4;
                                                if($sumbody > 2){
                                                   $valuebody = 1;
                                                }else{
                                                   $valuebody = 0;
                                                }
                                        }else{      
                                           $valuebody = "";
                                        }

                                        if(isset($row->theory_test1)){
                                                $sumtheory=$row->theory_test1+$row->theory_test2+$row->theory_test3;
                                                if($sumtheory > 120){
                                                    $valuetheory = 1;
                                                }else{
                                                    $valuetheory = 0;
                                                }
                                        }else{  
                                            $valuetheory = "";
                                        }

                                        if(isset($row->body_test1,$row->theory_test1,$row->act_test1)){
                                                $summer = $valuebody+$valuetheory+$row->act_test1;
                                                if($summer > 2){
                                                    $valuesum = 1;
                                                    $a++;
                                                }else{
                                                    $valuesum = 0;
                                                    $b++;
                                                }
                                        }else{
                                            $valuesum = "";
                                            $c++;
                                        }        
                                    }
        //dd($countdate);
            return view('home',compact('jointest','edittests','id' ,'countdate','countdate','a','b','c','countall'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'user_fname'=>'required|max:255',
            'user_lname'=>'required|max:255'
        ]);
        //dd($id,$request);
        $addupdate = Use_test::find($id)->update([
            'user_fname'=>$request->user_fname,
            'user_lname'=>$request->user_lname,
            'body_test1' => $request->body_test1,
            'body_test2' => $request->body_test2,
            'body_test3' => $request->body_test3,
            'body_test4' => $request->body_test4,
            'theory_test1' => $request->theory_test1,
            'theory_test2' => $request->theory_test2,
            'theory_test3' => $request->theory_test3,
            'act_test1' => $request->act_test1
        ]);
        
        return redirect()->route('home')->with('success',"แก้ไขข้อมูลเรียบร้อย");

    }

    public function softdelete($id){
        //dd($id);
        Use_test::find($id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อย");
    }

    public function showrestore(){
        $trashDel = Use_test::onlyTrashed()->paginate(10);
        //dd($trashDel);
        return view('restore',compact('trashDel'));
    }

    public function addrestore($id){
        Use_test::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',"กู้คืนข้อมูลเรียบร้อย");
    }

    public function updateAjex(Request $request){
        //dd($request);
        if ($request->ajax()){
            $testAjex = Use_test::find($request->id);
            $testAjex->user_fname = $request->input('user_fname');
            $testAjex->user_lname = $request->input('user_lname');
 
            $testAjex->update();
            return response($testAjex);
        }
    }

}
