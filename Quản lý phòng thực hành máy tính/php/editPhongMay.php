<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/PhongMay.xml');
    $xmlxpath = new DOMXPath($xml);
    $nodes = $xmlxpath->query('/PhongMay/May');
    foreach($nodes as $query) {
        $one = $query->getElementsByTagName("MaPhongMay");
        if($one->item(0)->nodeValue == $_POST['1']) {  
            $two = $query->getElementsByTagName("TenPhongMay");
            $two->item(0)->nodeValue = $_POST['2'];
            $three = $query->getElementsByTagName("MayTinh");
            $three->item(0)->nodeValue = $_POST['3'];
            $four = $query->getElementsByTagName("SoLuong");
            $four->item(0)->nodeValue = $_POST['4'];
            $five = $query->getElementsByTagName("MoTa");
            $five->item(0)->nodeValue = $_POST['5'];
        }
    }
    $xml->save('../XML/PhongMay.xml');
    header('location: ../main/PhongMay.php');
?>