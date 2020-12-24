<?php 
include 'header.php';



if(!$auth){
    return header("Location: index.php");
}else{
    echo "მოგესალმებით სამართავ პანელში";
}

include "footer.php";