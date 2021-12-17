<?php
    $xml=new DOMDocument();
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('../XML/GiangVien.xml');
    $root= $xml->firstChild;
    $mainTag=$xml->createElement("ThongTinGiangVien");
        
    $IDTag=$xml->createElement("MaGV",$_POST['1']);
    
    $NameTag=$xml->createElement("TenGV",$_POST['2']);
        
    $ThreeTag=$xml->createElement("MonHoc",$_POST['3']);
    
    $FourTag=$xml->createElement("GioiTinh",$_POST['4']);
    
    $FiveTag=$xml->createElement("NgaySinh",$_POST['5']);
    
    $SixTag=$xml->createElement("DiaChi",$_POST['6']);

        
    $mainTag->appendChild($IDTag);
    $mainTag->appendChild($NameTag);
    $mainTag->appendChild($ThreeTag);
    $mainTag->appendChild($FourTag);
    $mainTag->appendChild($FiveTag);
    $mainTag->appendChild($SixTag);
    
    $root->appendChild($mainTag);
    $xml->save('../XML/GiangVien.xml');
    header('location: ../main/GiangVien.php');
    ?>