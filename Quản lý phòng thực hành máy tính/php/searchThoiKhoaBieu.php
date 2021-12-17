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
            $two = $query->getElementsByTagName("PhongMay")->item(0)->nodeValue;
            $three = $query->getElementsByTagName("GiangVien")->item(0)->nodeValue;
            $four = $query->getElementsByTagName("MonHoc")->item(0)->nodeValue;
            $five = $query->getElementsByTagName("ThoiGianHoc")->item(0)->nodeValue;
            $six = $query->getElementsByTagName("Ngay")->item(0)->nodeValue;
            $seven = $query->getElementsByTagName("TongSoTiet")->item(0)->nodeValue;
        }
    }
?>