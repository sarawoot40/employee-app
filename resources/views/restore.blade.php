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
        <a class="nav-link" href="{{ URL('restore') }}">กู้คืนข้อมูล</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
@if (count($trashDel) > 0)
<div class="row" style="margin-left:5px; margin-right:5px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 style="text-align:center;">แสดงข้อมูลผู้สมัครสอบ</h3></div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col" style="width: 150px;">ชื่อ</th>
                        <th scope="col" style="width: 150px;">นามสกุล</th>
                        <th scope="col">วันที่</th>
                        <th scope="col">ผลการสอบรวม</th>
                        <th scope="col">ทดสอบร่างกาย</th>
                        <th scope="col">ทดสอบทฤษฎี</th>
                        <th scope="col">ทดสอบปฎบัติ</th>
                        <th scope="col">แก้ไขข้อมูล</th>
                        <th scope="col">ลบข้อมูล</th>
                        </tr>
                    </thead>
                    @else
                    <p><h1>**ไม่มีข้อมูลที่ถูกลบ**</h1></p>
                    @endif
                    <tbody>
                          @foreach($trashDel as $row)
                          <tr>
                              <th scope="row">{{ $trashDel->firstItem()+$loop->index }}</th>
                              <td>{{$row->user_fname}}</td>
                              <td>{{$row->user_lname}}</td>
                              <td>{{date('d-m-Y', strtotime($row->updated_at))}}</td>
                              @php($sumbody=$row->body_test1+$row->body_test2+$row->body_test3+$row->body_test4)
                                    @if($sumbody > 2)
                                      @php($valuebody= 1)
                                    @else
                                      @php($valuebody = 0)
                                    @endif
                                  @php($sumtheory=$row->theory_test1+$row->theory_test2+$row->theory_test3)
                                    @if($sumtheory > 120)
                                      @php($valuetheory = 1)
                                    @else
                                      @php($valuetheory = 0)
                                    @endif
                                  @php($sumall=$valuebody+$valuetheory+$row->act_test1)
                                    @if($sumall == 3)
                                      <td><h6 style="color:green;">ผ่านการทดสอบ</h6></td>
                                    @elseif($sumall > 0)
                                      <td><h6 style="color:red;">ไม่ผ่านการทดสอบ</h6></td>
                                    @else
                                      <td><h6 style="color:blue;">ไม่มีข้อมูลการสอบ</h6></td>
                                    @endif
                                    @if($valuebody == 1)
                                      <td>ผ่าน</td>
                                    @elseif($sumall == NULL)
                                      <td>ไม่มีข้อมูลการสอบ</td>
                                    @else
                                      <td>ไม่ผ่าน</td>
                                    @endif
                                    @if($valuetheory == 1)
                                      <td>ผ่าน</td>
                                    @elseif($sumall == NULL)
                                      <td>ไม่มีข้อมูลการสอบ</td>
                                    @else
                                      <td>ไม่ผ่าน</td>
                                    @endif
                                    @if($row->act_test1 == 1)
                                      <td>ผ่าน</td>
                                    @elseif($sumall == NULL)
                                      <td>ไม่มีข้อมูลการสอบ</td>
                                    @else
                                      <td>ไม่ผ่าน</td>
                                    @endif
                              <td><a href="{{ URL('addrestore/'.$row->id) }}" class="btn btn-warning" type="button">กู้คืนข้อมูล</a></td>
                              <td><a href="{{ URL('softdelete/'.$row->id) }}" softdelete class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')">ลบข้อมูลถาวร</a></td>                 
                          </tr>
                          @endforeach
                    </tbody>
                </table>
				          <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    {{$trashDel->links("pagination::bootstrap-4")}}
                    </ul>
                  </nav>
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