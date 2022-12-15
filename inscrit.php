<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$req='select * from inscrit';
$con = mysqli_connect("localhost" , "root"  ,"" ,"etudian");
$resultat = mysqli_query ($con,$req);
$row= mysqli_fetch_array ($resultat);
if ($row['email'] == $email)
{
    echo ("Login success !! Welcome ".$row ['first_name']) ;
}
else{
    echo ("Failed to login !");
}
?>