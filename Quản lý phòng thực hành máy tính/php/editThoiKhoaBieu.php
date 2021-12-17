<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/ThoiKhoaBieu.xml');
    $xmlxpath = new DOMXPath($xml);
    $nodes = $xmlxpath->query('/ThoiKhoaBieu/Lich');
    foreach($nodes as $query) {
        $one = $query->getElementsByTagName("MaTKB");
        if($one->item(0)->nodeValue == $_POST['1']) {  
            $two = $query->getElementsByTagName("PhongMay");
            $two->item(0)->nodeValue = $_POST['2'];
            $three = $query->getElementsByTagName("GiangVien");
            $three->item(0)->nodeValue = $_POST['3'];
            $four = $query->getElementsByTagName("MonHoc");
            $four->item(0)->nodeValue = $_POST['4'];
            $five = $query->getElementsByTagName("ThoiGianHoc");
            $five->item(0)->nodeValue = $_POST['5'];
            $six = $query->getElementsByTagName("Ngay");
            $six->item(0)->nodeValue = $_POST['6'];
            $seven = $query->getElementsByTagName("TongSoTiet");
            $seven->item(0)->nodeValue = $_POST['7'];
        }
    }
    $xml->save('../XML/ThoiKhoaBieu.xml');
    header('location: ../main/ThoiKhoaBieu.php');
?>