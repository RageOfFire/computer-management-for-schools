<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/MonHoc.xml');
    $xmlxpath = new DOMXPath($xml);
    $therequest = $_REQUEST['s'];
    $nodes = $xmlxpath->query('Mon/TenMonHoc');
    for ($i = 0; $i < $nodes->length; $i++) {     
        $node = $nodes->item($i);
        if ($node->nodeValue === $therequest) {
            $node->parentNode->parentNode->removeChild($node->parentNode);
        }         
    }
    $xml->save('../XML/MonHoc.xml');
    header('location: ../main/MonHoc.php');
?>