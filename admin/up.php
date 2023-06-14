<?php

include('config.php');

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $prenom  = $_POST['prenom'];
    $tel = $_POST['tel'];
    $fax = $_POST['fax'];
    
    
 
     
    $update = "UPDATE products SET  prenom=' $prenom',tel='$tel',fax='$fax'  WHERE  name='$name'";
    mysqli_query($con, $update);

    header('location: index.php');
}
?>