<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý giảng viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
      <!-- Sidebar -->
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-4"> <i class="fas fa-home"></i> Quản lý giảng viên</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="../index.html" class="nav-link text-white" aria-current="page">
              <i class="fas fa-home"></i>
            Trang chủ
            </a>
          </li>
          <li>
            <a href="./ThoiKhoaBieu.php" class="nav-link text-white">
              <i class="fas fa-calendar"></i>
            Quản lý thời khóa biểu
            </a>
          </li>
          <li>
            <a href="./PhongMay.php" class="nav-link text-white">
              <i class="fas fa-desktop"></i>
            Quản lý phòng máy
            </a>
          </li>
          <li>
            <a href="./MonHoc.php" class="nav-link text-white">
              <i class="fas fa-book-open"></i>
            Quản lý môn học
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white active">
              <i class="fas fa-user-tie"></i>
            Quản lý giảng viên
            </a>
          </li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <div class="dropup">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="far fa-user-circle"></i>
            <strong>&nbsp;Bùi Hồng Sơn</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#"><i class="fas fa-key"></i>Đổi mật khẩu</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i>Trang cá nhân</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
          </ul>
        </div>
      </div>
      <!-- Sidebar -->
      <table class="table table-hover" style="height: 100%;">
        <thead>
          <tr>
            <th scope="col">Mã giảng viên</th>
            <th scope="col">Tên giảng viên</th>
            <th scope="col">Môn học</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col" colspan="2" class="text-center">Cài đặt</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $xmlname = 'GiangVien';
          $xml = simplexml_load_file ('../XML/'.$xmlname.'.xml') or die ('Error');
          foreach ($xml->children() as $xmllist) {
            echo '<tr style="height: 100px;">';
            echo '<td>'.$xmllist -> MaGV.'</td>';
            echo '<td>'.$xmllist -> TenGV.'</td>';
            echo '<td>'.$xmllist -> MonHoc.'</td>';
            echo '<td>'.$xmllist -> GioiTinh.'</td>';
            echo '<td>'.$xmllist -> NgaySinh.'</td>';
            echo '<td>'.$xmllist -> DiaChi.'</td>';
            echo '<td><a href="../php/deleteGiangVien.php?s='.$xmllist -> TenGV.'"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>';
            echo '<td><a href="../main/editGiangViensite.php?s='.$xmllist -> MaGV.'"><button class="btn btn-success"><i class="far fa-edit"></i></button></a></td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </main>
    <table class="table table-hover table-secondary">
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="../Showjson.php?json=<?php echo $xmlname?>"><button type="button" class="btn btn-primary">Xem dưới dạng JSON</button></a></td>
      <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm mới</button></td>
    </tr>
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Giảng viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../php/addGiangVien.php" method="POST">
      <div class="modal-body">
        <div class="mb-3">
          <label for="MaTKB" class="form-label">Mã giảng viên</label>
          <input type="text" class="form-control" id="MaTKB" name="1">
        </div>
        <div class="mb-3">
          <label for="PM" class="form-label">Tên giảng viên</label>
          <input type="text" class="form-control" id="PM" name="2">
        </div>
        <div class="mb-3">
          <label for="TGH" class="form-label">Môn học</label>
          <input type="text" class="form-control" id="TGH" name="3">
        </div>
        <div class="mb-3">
          <label for="Ngay" class="form-label">Giới tính</label>
          <input type="text" class="form-control" id="Ngay" name="4" value="Nam/Nữ">
        </div>
        <div class="mb-3">
          <label for="TST" class="form-label">Ngày sinh</label>
          <input type="date" class="form-control" id="TST" name="5">
        </div>
        <div class="mb-3">
          <label for="NBD" class="form-label">Địa chỉ</label>
          <input type="text" class="form-control" id="NBD" name="6">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
