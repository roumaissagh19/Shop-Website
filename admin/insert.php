<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST['name'];
    $PRICE = $_POST['prenom'];
    $fen= $_POST['fen'];
    $fax= $_POST['fax'];
    
    
    $insert = "INSERT INTO  products (name, price ,image) VALUES ('$NAME','$PRICE','$fen','$fax' )";
    mysqli_query($con, $insert);
    header('location: index.php');
}
?>