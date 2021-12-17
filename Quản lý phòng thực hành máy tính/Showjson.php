<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị dưới dạng JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1 class="text-center">JSON</h1>
<?php
    $xmlname = $_REQUEST['json'];
    $xml = simplexml_load_file('./XML/'.$xmlname.'.xml');
    $getjsonecode=json_encode($xml, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    echo "<textarea class='form-control' rows='25' readonly>";
    print_r($getjsonecode);
    echo "</textarea>";
    if (isset($_POST['Nhập'])) {
        $file = fopen('./json/'.$xmlname.'.json','w');
        fwrite($file,$getjsonecode);
        fclose($file);
        echo "<script type='text/javascript'>alert('Tạo thành công file json với tên $xmlname.json'); window.history.go(-1);</script>";
    }
?>
<form action="./Showjson.php?json=<?php echo $xmlname?>" method="POST">
    <button type="submit" class="btn btn-success justify-content-center" name="Nhập">Lưu file JSON</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>