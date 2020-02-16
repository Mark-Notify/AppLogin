<?php
$con=mysqli_connect("localhost","root","","student");
if ($con) {
    echo "Success";
}else{
    echo "Error";
}
?>