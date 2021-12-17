<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/MonHoc.xml');
    $root= $xml->firstChild;
    $mainTag=$xml->createElement("Mon");
        
    $IDTag=$xml->createElement("MaMonHoc",$_POST['1']);
    
    $NameTag=$xml->createElement("TenMonHoc",$_POST['2']);
        
    $ThreeTag=$xml->createElement("HocKy",$_POST['3']);
    
    $FourTag=$xml->createElement("SoTiet",$_POST['4']);
    
        
    $mainTag->appendChild($IDTag);
    $mainTag->appendChild($NameTag);
    $mainTag->appendChild($ThreeTag);
    $mainTag->appendChild($FourTag);
    
    $root->appendChild($mainTag);
    $xml->save('../XML/MonHoc.xml');
    header('location: ../main/MonHoc.php');
    ?>