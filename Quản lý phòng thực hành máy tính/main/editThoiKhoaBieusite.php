<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chỉnh sửa thông tin thời khóa biểu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="../css/Form edit.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
        $xml = simplexml_load_file('../XML/ThoiKhoaBieu.xml');
        $nodes = $xml->xpath("Lich[MaTKB= '".$_REQUEST['s']."']");
        $one = $nodes[0]->MaTKB;
        $two = $nodes[0]->PhongMay;
        $three = $nodes[0]->GiangVien;
        $four = $nodes[0]->MonHoc;
        $five = $nodes[0]->ThoiGianHoc;
        $six = $nodes[0]->Ngay;
        $seven = $nodes[0]->TongSoTiet;
    ?>
<main class="form-signin">
  <form action="../php/editThoiKhoaBieu.php" method="POST">
    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/HUNRE_Logo.png/225px-HUNRE_Logo.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Nhập thông tin</h1>
    <div class="form-floating">
      <input type="hidden" class="form-control" name="1" id="Zero" value="<?php echo $one;?>" readonly>
      <label for="Zero">Mã thời khóa biểu</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="2" id="First" value="<?php echo $two;?>" required>
      <label for="First">Phòng máy</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="3" id="Second" value="<?php echo $three;?>" required>
      <label for="Second">Giảng viên dạy</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="4" id="Third" value="<?php echo $four;?>" required>
      <label for="Third">Môn học</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="5" id="Four" value="<?php echo $five;?>" required>
      <label for="Four">Thời gian học</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="6" id="Five" value="<?php echo $six;?>" required>
      <label for="Five">Ngày trong tuần</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="7" id="Six" value="<?php echo $seven;?>" required>
      <label for="Six">Số tiết</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Nhập</button>
  </form>
</main>
  </body>
</html>
