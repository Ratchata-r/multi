<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เว็บเพิ่มรายการ แบบหลายรายการ</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

  <nav class="navbar navbar-dark bg-primary">
    <a href="#" class="navbar-brand"> เพิ่มรายการ แบบหลายรายการ</a>
  </nav>
  
  <div class="container">
    <div class="row mt-3">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">ข้อสอบระบบขนส่ง</h4>
            <form action="save.php" method="post">

              <div class="form-group">
                <label for="">โจทย์</label>
                <input type="text" name="cName" class="form-control">
              </div>

              <div class="form-group">
                <label for="">รายละเอียด</label>
                <input type="text" name="cDetail" class="form-control">
              </div>

              <div class="form-group">
                <label for="">ตัวเลือก</label>
                <ol>
                  <li><div class="d-flex mb-2"><input type="text" name="cChoice[]" class="form-control"></div></li>
                  <li><div class="d-flex mb-2"><input type="text" name="cChoice[]" class="form-control"></div></li>
                  <li><div class="d-flex mb-2"><input type="text" name="cChoice[]" class="form-control"></div></li>
                </ol>             
              </div>

              <button type="submit" class="btn btn-success">บันทึก</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>