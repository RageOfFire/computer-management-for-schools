<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/GiangVien.xml');
    $xmlxpath = new DOMXPath($xml);
    $therequest = $_REQUEST['s'];
    $nodes = $xmlxpath->query('ThongTinGiangVien/TenGV');
    for ($i = 0; $i < $nodes->length; $i++) {     
        $node = $nodes->item($i);
        if ($node->nodeValue === $therequest) {
            $node->parentNode->parentNode->removeChild($node->parentNode);
        }         
    }
    $xml->save('../XML/GiangVien.xml');
    header('location: ../main/GiangVien.php');
?>