<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<table class="table table-hover" style="height: 100%;">
        <thead>
          <tr>
            <th scope="col">Mã thời khóa biểu</th>
            <th scope="col">Phòng máy</th>
            <th scope="col">Giảng viên</th>
            <th scope="col">Môn học</th>
            <th scope="col">Thời gian học</th>
            <th scope="col">Ngày trong tuần</th>
            <th scope="col">Số tiết</th>
          </tr>
        </thead>
        <tbody>
    <?php
        $xml = simplexml_load_file('../XML/ThoiKhoaBieu.xml');
        $search = $xml->xpath("//Lich[*[contains(translate(.,'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'abcdefghihklmnopqrstuvwxyz'),'".$_POST['search']."')]]");
        foreach ( $search as $item )  {
          echo '<tr style="height: 100px;">';
          echo '<td>'.$item->MaTKB.'</td>';
          echo '<td>'.$item->PhongMay.'</td>';
          echo '<td>'.$item->GiangVien.'</td>';
          echo '<td>'.$item->MonHoc.'</td>';
          echo '<td>'.$item->ThoiGianHoc.'</td>';
          echo '<td>'.$item->Ngay.'</td>';
          echo '<td>'.$item->TongSoTiet.'</td>';
          echo '</tr>';
          }
    ?>
        </tbody>
      </table>
</body>
</html>