<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/PhongMay.xml');
    $root= $xml->firstChild;
    $mainTag=$xml->createElement("May");
        
    $IDTag=$xml->createElement("MaPhongMay",$_POST['1']);
    
    $NameTag=$xml->createElement("TenPhongMay",$_POST['2']);
        
    $ThreeTag=$xml->createElement("MayTinh",$_POST['3']);
    
    $FourTag=$xml->createElement("SoLuong",$_POST['4']);
    
    $FiveTag=$xml->createElement("MoTa",$_POST['5']);
        
    $mainTag->appendChild($IDTag);
    $mainTag->appendChild($NameTag);
    $mainTag->appendChild($ThreeTag);
    $mainTag->appendChild($FourTag);
    $mainTag->appendChild($FiveTag);
    
    $root->appendChild($mainTag);
    $xml->save('../XML/PhongMay.xml');
    header('location: ../main/PhongMay.php');
    ?>