<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>
<script language="javascript">
              function checkNull(){ 
                var forms=document.form1; 
                if(forms.theory_test1.value != ""  || forms.theory_test2.value != ""  || forms.theory_test3.value != "" ){
                    if (forms.theory_test1.value == ""){
                    alert('กรุณากรอกข้อมูล *การทดสอบภาคทฤษฏี* ให้ครบ'); 
                      forms.theory_test1.focus();    
                      return false;  
                    }
                    else if (forms.theory_test2.value == ""){
                    alert('กรุณากรอกข้อมูล *การทดสอบภาคทฤษฏี* ให้ครบ'); 
                      forms.theory_test2.focus();    
                      return false;  
                    }
                    else if (forms.theory_test3.value == ""){
                    alert('กรุณากรอกข้อมูล *การทดสอบภาคทฤษฏี* ให้ครบ'); 
                      forms.theory_test3.focus();    
                      return false;  
                    }
                    else if (forms.theory_test1.value <= '0' || forms.theory_test1.value > '50'){
                    alert('คุณกรอกคะแนนไม่ถูกต้อง');    
                      return false;  
                    }
                    else if (forms.theory_test2.value <= '0' || forms.theory_test2.value > '50'){
                    alert('คุณกรอกคะแนนไม่ถูกต้อง');    
                      return false;  
                    }
                    else if (forms.theory_test3.value <= '0' || forms.theory_test3.value > '50'){
                    alert('คุณกรอกคะแนนไม่ถูกต้อง');    
                      return false;  
                    }
                }   
                if(forms.body_test1[0].checked == true || forms.body_test1[1].checked == true ||
                    forms.body_test2[0].checked == true || forms.body_test2[1].checked == true ||
                    forms.body_test3[0].checked == true || forms.body_test3[1].checked == true ||
                    forms.body_test4[0].checked == true || forms.body_test4[1].checked == true ){
                  if (forms.body_test1[0].checked == false && forms.body_test1[1].checked == false){           
                    alert("กรุณากรอกข้อมูล *การทดสอบร่างกาย* ให้ครบ")           
                    //forms.body_test1[0].focus() && forms.body_test1[1].focus();        
                    return false 
                  } 
                  else if (forms.body_test2[0].checked == false && forms.body_test2[1].checked == false){           
                    alert("กรุณากรอกข้อมูล *การทดสอบร่างกาย* ให้ครบ")           
                    //forms.body_test2[0].focus() && forms.body_test2[1].focus();          
                    return false 
                  }
                  else if (forms.body_test3[0].checked == false && forms.body_test3[1].checked == false){           
                    alert("กรุณากรอกข้อมูล *การทดสอบร่างกาย* ให้ครบ")           
                    //forms.body_test3[0].focus();          
                    return false 
                  }
                  else if (forms.body_test4[0].checked == false && forms.body_test4[1].checked == false){           
                    alert("กรุณากรอกข้อมูล *การทดสอบร่างกาย* ให้ครบ")           
                    //forms.body_test4[0].focus();          
                    return false 
                  }
                }
            //     $(document).on('click', '.edit', function(event){
            //     event.preventDefault();
            //     var id = $(this).data('id');
            //     var user_fname = $(this).data('first');
            //     var user_lname = $(this).data('last');
            //     var body_test1 = $(this).data('body_test1');
            //     //document.getElementById('gender_Male').checked;
            //     //console.log(body_test1);
            //     var body_test2 = $(this).data('body_test2');
            //     var body_test3 = $(this).data('body_test3');
            //     var body_test4 = $(this).data('body_test4');
            //     var theory_test1 = $(this).data('theory_test1');
            //     var theory_test2 = $(this).data('theory_test2');
            //     var theory_test3 = $(this).data('theory_test3');
            //     var act_test1 = $(this).data('act_test1');
            //     $('#editmodal').modal('show');
            //     $('#user_fname').val(user_fname);
            //     $('#user_lname').val(user_lname);
            //     //$('#body_test1').val(body_test1);
            //     $('#body_test2').val(body_test2);
            //     $('#body_test3').val(body_test3);
            //     $('#body_test4').val(body_test4);
            //     $('#theory_test1').val(theory_test1);
            //     $('#theory_test2').val(theory_test2);
            //     $('#theory_test3').val(theory_test3);
            //     $('#act_test1').val(act_test1);
            //     $('#id').val(id);
            // });            
              }    
         </script>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ URL('images/car.png') }}" alt="" width="30" height="30">
        </a>
      </div>
    </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('home') }}">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL('restore') }}">กู้คืนข้อมูล</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row" style="margin-left:5px; margin-right:5px;">
        <div class="col-md-9">
                    @if(session("success"))
                        <div class="alert alert-success" role="alert">{{session('success')}}</div>
                    @endif
            <div class="card">
                <div class="card-header">
                <div class="row">
                  <div class="col"><h6 style="font-weight:bold;">จำนวนผู้สอบทั้งหมด {{$countall}} คน</h6><p style="height: 5px;">ผู้สอบวันนี้ {{$countdate}} คน</p><p style="height: 5px;">สอบผ่าน {{$a}} คน / ไม่ผ่าน {{$b}} คน / รอพิจรณา {{$c}} คน</p></div>
                  <div class="col"><h3>แสดงข้อมูลผู้สมัครสอบ</h3></div>
                  <div class="col">
                  <form class="d-flex" method="get" action="{{ url('home') }}">
                      <input class="form-control" type="search" name="query" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  </div>
                </div>
              </div>
              <p id="demo"></p>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col" style="width: 150px;">ชื่อ</th>
                        <th scope="col" style="width: 150px;">นามสกุล</th>
                        <th scope="col">วันที่สมัครสอบ</th>
                        <th scope="col">ผลการสอบรวม</th>
                        <th scope="col">ทดสอบร่างกาย</th>
                        <th scope="col">ทดสอบทฤษฎี</th>
                        <th scope="col">ทดสอบปฎบัติ</th>
                        <th scope="col">แก้ไขข้อมูล</th>
                        <th scope="col">ลบข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody> 
                          @foreach($jointest as $row)
                          <tr>
                              <th scope="row">{{ $jointest->firstItem()+$loop->index }}</th>
                              <td>{{$row->user_fname}}</td>
                              <td>{{$row->user_lname}}</td>
                              <td>{{date('d-m-Y', strtotime($row->created_at))}}</td>

                                        @if(isset($row->body_test1))
                                          @php($sumbody=$row->body_test1+$row->body_test2+$row->body_test3+$row->body_test4)
                                          @if($sumbody >= 3)
                                            @php($valuebody = 1)
                                          @else
                                            @php($valuebody = 0)
                                          @endif
                                        @else
                                          @php($valuebody = "")
                                        @endif 

                                        @if(isset($row->theory_test1))  
                                          @php($sumtheory=$row->theory_test1+$row->theory_test2+$row->theory_test3)
                                          @if($sumtheory > 120)
                                            @php($valuetheory = 1)
                                          @else
                                            @php($valuetheory = 0)
                                          @endif
                                        @else
                                          @php($valuetheory = "")
                                        @endif

                                    @if(isset($row->body_test1,$row->theory_test1,$row->act_test1))
                                        @php($summer = $valuebody+$valuetheory+$row->act_test1)
                                        @if($summer > 2)
                                          @php ($valuesum = 1)
                                        @else
                                          @php ($valuesum = 0)
                                        @endif
                                    @else
                                        @php ($valuesum = "")
                                    @endif

                                    @if($valuesum == 1)
                                      <td style="color:green; font-weight:bold;">สรุป = ผ่าน</td>
                                    @elseif($valuesum == '0')
                                      <td style="color:red; font-weight:bold;">สรุป = ไม่ผ่าน</td>
                                    @else
                                    <td style="color:blue; font-weight:bold;">รอพิจารณา</td>
                                    @endif

                                    @if($valuebody == 1)
                                      <td style="color:green;">ผ่าน</td>
                                    @elseif($valuebody == '0')
                                      <td style="color:red;">ไม่ผ่าน</td>
                                    @else
                                    <td style="color:blue;">รอพิจารณา</td>
                                    @endif

                                    @if($valuetheory == 1)
                                      <td style="color:green;">ผ่าน</td>
                                    @elseif($valuetheory == '0')
                                      <td style="color:red;">ไม่ผ่าน</td>
                                    @else
                                      <td style="color:blue;">รอพิจารณา</td>
                                    @endif
 
                                    @if($row->act_test1 == '0')
                                      <td style="color:red;">ไม่ผ่าน</td>
                                    @elseif($row->act_test1 == '1')
                                      <td style="color:green;">ผ่าน</td>
                                    @else
                                      <td style="color:blue;">รอพิจารณา</td>
                                    @endif
                              <td><a href="{{ URL('edituser/'.$row->id) }}" data-first='{{ $row->user_fname }}' data-last='{{ $row->user_lname }}'
                              data-body_test1='{{ $row->body_test1 }}' data-body_test2='{{ $row->body_test2 }}' data-body_test3='{{ $row->body_test3 }}' data-body_test4='{{ $row->body_test4 }}'
                              data-theory_test1='{{ $row->theory_test1 }}' data-theory_test2='{{ $row->theory_test2	}}' data-theory_test3='{{ $row->theory_test3 }}'
                              data-act_test1='{{ $row->act_test1 }}' class="btn btn-warning edit" type="button">แก้ไขข้อมูล</a></td>
                              <td><a href="{{ URL('softdelete/'.$row->id) }}" softdelete class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')">ลบข้อมูล</a></td>                 
                          </tr>
                          @endforeach
                    </tbody>
                </table>
				          <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    {{$jointest->links("pagination::bootstrap-4")}}
                    </ul>
                  </nav>
            </div> 
        </div>
        <div class="col-md-3">
        <div class="card">
                <div class="card-header">
                  <h4 style="text-align:center;">
                    @if(isset($edittests->id)) 
                      ฟอร์มแก้ไขผู้สมัครสอบ 
                    @else 
                      ฟอร์มเพิ่มผู้สมัครสอบ 
                    @endif
                  </h4>
                </div>
                <div class="card-body">
                @if(isset($edittests->id))
                    <form action="{{ URL('update/'.$id) }}" id="editForm" name="form1" method="post" onsubmit="javascript:return checkNull();">
                  @else
                    <form action="{{ route('adddataUser') }}" name="form1" method="post" onsubmit="javascript:return checkNull();">
                  @endif
                        @csrf
                        <label for="user_fname">ชื่อผู้สมัครสอบ</label>
                        <input type="text" class="form-control" id="user_fname" name="user_fname" value="@if(isset($edittests->user_fname)){{$edittests->user_fname}}@endif">
                        @error('user_fname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <label for="user_lname">นามสกุลผู้สมัครสอบ</label>
                        <input type="text" class="form-control" id="user_lname" name="user_lname" value="@if(isset($edittests->user_lname)){{$edittests->user_lname}}@endif">
                        @error('user_lname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="card-header" style="margin-top: 10px;"><h5>การทดสอบร่างกาย</h5></div>
                            <h6>1.ทดสอบตาบอดสี</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="body_test1" name="body_test1" value="1" @if(isset($edittests->body_test1)&&$edittests->body_test1>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="body_test1" name="body_test1" value="0"@if(isset($edittests->body_test1)&&$edittests->body_test1==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>2.ทดสอบสายตายาว</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="body_test2" name="body_test2" value="1" @if(isset($edittests->body_test2)&&$edittests->body_test2>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="body_test2" name="body_test2" value="0" @if(isset($edittests->body_test2)&&$edittests->body_test2==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>3.ทดสอบสายตาเอียง</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test3" value="1" @if(isset($edittests->body_test3)&&$edittests->body_test3>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test3" value="0" @if(isset($edittests->body_test3)&&$edittests->body_test3==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>4.ทดสอบการตอบสนองของร่างการ</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test4" value="1" @if(isset($edittests->body_test4)&&$edittests->body_test4>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test4" value="0" @if(isset($edittests->body_test4)&&$edittests->body_test4==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <br>
                            <div class="card-header"><h5>การทดสอบภาคทฤษฏี</h5></div>
                                <label for="user_fname">ป้ายจราจร</label>
                                <input type="number" class="form-control" id="theory_test1" name="theory_test1" value="@if(isset($edittests->theory_test1)){{$edittests->theory_test1}}@endif">
                                <label for="user_fname"> เส้นจราจร</label>
                                <input type="number" class="form-control" id="theory_test2" name="theory_test2" value="@if(isset($edittests->theory_test2)){{$edittests->theory_test2}}@endif">
                                <label for="user_fname">การให้ทาง</label>
                                <input type="number" class="form-control" id="theory_test3" name="theory_test3" value="@if(isset($edittests->theory_test3)){{$edittests->theory_test3}}@endif">
                            <div class="card-header" style="margin-top: 10px;"><h5>การสอบภาคปฏิบัติ</h5></div>
                            <div class="form-check form-check-inline" style="margin-top:5px;">
                            <input class="form-check-input" type="radio" name="act_test1" value="1" @if(isset($edittests->act_test1)&&$edittests->act_test1>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="act_test1" value="0" @if(isset($edittests->act_test1)&&$edittests->act_test1==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                          <div class="d-grid gap-2" style="margin-top: 10px;">
                          @if(isset($edittests->id))
                          <div class="row">
                            <div class="col d-grid gap-2">
                            <input type="submit" class="btn btn-primary" value="แก้ไขข้อมูล"></input>
                            </div>
                            <div class="col d-grid gap-2">
                            <a href="{{ url('home') }}" type="button" class="btn btn-danger">ยกเลิก</a>
                            </div>
                          @else
                            <input type="submit" class="btn btn-primary" value="เพิ่มข้อมูล"></input>
                          @endif
                        </div>
                        </form>
                </div>
            </div> 
        </div>
    </div>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>