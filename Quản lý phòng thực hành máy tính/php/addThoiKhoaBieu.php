<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/ThoiKhoaBieu.xml');
    $root= $xml->firstChild;
    $mainTag=$xml->createElement("Lich");
        
    $IDTag=$xml->createElement("MaTKB",$_POST['1']);
    
    $NameTag=$xml->createElement("PhongMay",$_POST['2']);
        
    $ThreeTag=$xml->createElement("GiangVien",$_POST['3']);
    
    $FourTag=$xml->createElement("MonHoc",$_POST['4']);
    
    $FiveTag=$xml->createElement("ThoiGianHoc",$_POST['5']);
    
    $SixTag=$xml->createElement("Ngay",$_POST['6']);

    $SevenTag=$xml->createElement("TongSoTiet",$_POST['7']);
        
    $mainTag->appendChild($IDTag);
    $mainTag->appendChild($NameTag);
    $mainTag->appendChild($ThreeTag);
    $mainTag->appendChild($FourTag);
    $mainTag->appendChild($FiveTag);
    $mainTag->appendChild($SixTag);
    $mainTag->appendChild($SevenTag);
    
    $root->appendChild($mainTag);
    $xml->save('../XML/ThoiKhoaBieu.xml');
    header('location: ../main/ThoiKhoaBieu.php');
?>