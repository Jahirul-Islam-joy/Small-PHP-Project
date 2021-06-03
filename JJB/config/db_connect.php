<?php

# Connecting to database
$conn = mysqli_connect('localhost','root','','jjb');

# check connection 
if(! $conn){
    echo 'Connection Error: '. mysqli_connect_error();
}


?>