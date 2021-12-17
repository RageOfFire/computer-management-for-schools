<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/GiangVien.xml');
    $xmlxpath = new DOMXPath($xml);
    $nodes = $xmlxpath->query('/GiangVien/ThongTinGiangVien');
    foreach($nodes as $query) {
        $one = $query->getElementsByTagName("MaGV");
        if($one->item(0)->nodeValue == $_POST['1']) {  
            $two = $query->getElementsByTagName("TenGV");
            $two->item(0)->nodeValue = $_POST['2'];
            $three = $query->getElementsByTagName("MonHoc");
            $three->item(0)->nodeValue = $_POST['3'];
            $four = $query->getElementsByTagName("GioiTinh");
            $four->item(0)->nodeValue = $_POST['4'];
            $five = $query->getElementsByTagName("NgaySinh");
            $five->item(0)->nodeValue = $_POST['5'];
            $six = $query->getElementsByTagName("DiaChi");
            $six->item(0)->nodeValue = $_POST['6'];
        }
    }
    $xml->save('../XML/GiangVien.xml');
    header('location: ../main/GiangVien.php');
?>