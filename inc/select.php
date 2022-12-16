<?php

include "./inc/conn.php";

$sql="SELECT * FROM users ORDER BY RAND() LIMIT 1";
$result=mysqli_query($conn,$sql);
$user=mysqli_fetch_all($result,MYSQLI_ASSOC);