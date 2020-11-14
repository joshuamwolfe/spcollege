<?php
    // foreach($apubs as $apub) {
    //     $sauthors = '';
    //     $stitle = $apub['sarticle'];
    //         foreach($apub['authors'] as $author) {
    //         $sauthors .= $author['slast'].", ".$author['sfirst']."; ";
    //         }
    //
    //     echo "$sauthors<br />\n$stitle<br />\n";
    // }

    $color= array( "M", "XL", "XXL");
    $fruit = array( "Tshirt", "Shoes", "glass");
    foreach ($color as $c){
        foreach ($fruit as $f){
           echo "this is a $c $f .<br/>";
        }
    }
?>
