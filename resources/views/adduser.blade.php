<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

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
          <a class="nav-link" href="{{ route('adduser') }}">เพิ่มผู้สอบ</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="card">
                    @if(session("success"))
                        <div class="alert alert-success" role="alert">{{session('success')}}</div>
                    @endif
                <div class="card-header"><h4 style="text-align:center;">ฟอร์มเพิ่มผู้สมัครสอบ</h4></div>
                <div class="card-body">
                @if(isset($xxx->id))
                    <form action="{{ URL('update/'.$id) }}" method="post">
                  @else
                    <form action="{{ route('addUser') }}" method="post">
                  @endif
                        @csrf
                        <label for="user_fname">ชื่อผู้สมัครสอบ</label>
                        <input type="text" class="form-control" name="user_fname" value="@if(isset($xxx->user_fname)){{$xxx->user_fname}}@endif">
                        @error('user_fname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <label for="user_lname">นามสกุลผู้สมัครสอบ</label>
                        <input type="text" class="form-control" name="user_lname" value="@if(isset($xxx->user_lname)){{$xxx->user_lname}}@endif">
                        @error('user_lname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="card-header" style="margin-top: 10px;"><h5>การทดสอบร่างกาย</h5></div>
                            <h6>1.ทดสอบตาบอดสี</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test1" value="1" required @if(isset($edittests->body_test1)&&$edittests->body_test1>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test1" value="0" required @if(isset($edittests->body_test1)&&$edittests->body_test1==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>2.ทดสอบสายตายาว</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test2" value="1" required @if(isset($edittests->body_test2)&&$edittests->body_test2>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test2" value="0" required @if(isset($edittests->body_test2)&&$edittests->body_test2==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>3.ทดสอบสายตาเอียง</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test3" value="1" required @if(isset($edittests->body_test3)&&$edittests->body_test3>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test3" value="0" required @if(isset($edittests->body_test3)&&$edittests->body_test3==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <h6>4.ทดสอบการตอบสนองของร่างการ</h6>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test4" value="1" required @if(isset($edittests->body_test4)&&$edittests->body_test4>0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="body_test4" value="0" required @if(isset($edittests->body_test4)&&$edittests->body_test4==0) checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                            <br>
                            <div class="card-header"><h5>การทดสอบภาคทฤษฏี</h5></div>
                                <label for="user_fname">ป้ายจราจร</label>
                                <input type="text" class="form-control" name="theory_test1" value="@if(isset($edittests->theory_test1)){{$edittests->theory_test1}}@endif" required>
                                <label for="user_fname"> เส้นจราจร</label>
                                <input type="text" class="form-control" name="theory_test2" value="@if(isset($edittests->theory_test2)){{$edittests->theory_test2}}@endif" required>
                                <label for="user_fname">การให้ทาง</label>
                                <input type="text" class="form-control" name="theory_test3" value="@if(isset($edittests->theory_test3)){{$edittests->theory_test3}}@endif" required>
                            <div class="card-header" style="margin-top: 10px;"><h5>การสอบภาคปฏิบัติ</h5></div>
                            <div class="form-check form-check-inline" style="margin-top:5px;">
                            <input class="form-check-input" type="radio" name="act_test1" value="1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ผ่าน
                            </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="act_test1" value="0" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                ไม่ผ่าน
                            </label>
                            </div>
                          <div class="d-grid gap-2" style="margin-top: 10px;">
                          @if(isset($xxx->id))
                            <input type="submit" class="btn btn-primary" value="แก้ไขข้อมูล"></input>
                          @else
                            <input type="submit" class="btn btn-primary" value="เพิ่มข้อมูล"></input>
                          @endif
                        </div>
                        </form>
                </div>
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