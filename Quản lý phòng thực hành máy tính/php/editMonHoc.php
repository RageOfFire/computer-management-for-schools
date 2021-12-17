<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/MonHoc.xml');
    $xmlxpath = new DOMXPath($xml);
    $nodes = $xmlxpath->query('/MonHoc/Mon');
    foreach($nodes as $query) {
        $one = $query->getElementsByTagName("MaMonHoc");
        if($one->item(0)->nodeValue == $_POST['1']) {  
            $two = $query->getElementsByTagName("TenMonHoc");
            $two->item(0)->nodeValue = $_POST['2'];
            $three = $query->getElementsByTagName("HocKy");
            $three->item(0)->nodeValue = $_POST['3'];
            $four = $query->getElementsByTagName("SoTiet");
            $four->item(0)->nodeValue = $_POST['4'];
        }
    }
    $xml->save('../XML/MonHoc.xml');
    header('location: ../main/MonHoc.php');
?>