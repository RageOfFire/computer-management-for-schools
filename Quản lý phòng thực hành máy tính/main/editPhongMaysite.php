<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chỉnh sửa thông tin phòng máy</title>

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
        $xml = simplexml_load_file('../XML/PhongMay.xml');
        $nodes = $xml->xpath("May[MaPhongMay= '".$_REQUEST['s']."']");
        $one = $nodes[0]->MaPhongMay;
        $two = $nodes[0]->TenPhongMay;
        $three = $nodes[0]->MayTinh;
        $four = $nodes[0]->SoLuong;
        $five = $nodes[0]->MoTa;
    ?>
<main class="form-signin">
  <form action="../php/editPhongMay.php" method="POST">
    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/HUNRE_Logo.png/225px-HUNRE_Logo.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Nhập thông tin</h1>
    <div class="form-floating">
      <input type="hidden" class="form-control" name="1" id="Zero" value="<?php echo $one;?>" readonly>
      <label for="Zero">Mã phòng máy</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="2" id="First" value="<?php echo $two;?>" required>
      <label for="First">Tên phòng máy</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="3" id="Second" value="<?php echo $three;?>" required>
      <label for="Second">Máy tính</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="4" id="Third" value="<?php echo $four;?>" required>
      <label for="Third">Số lượng</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="5" id="Four" value="<?php echo $five;?>" required>
      <label for="Four">Mô tả</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Nhập</button>
  </form>
</main>
  </body>
</html>
