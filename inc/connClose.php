<?php



  $sql='SELECT * FROM users';
  $result=mysqli_query($conn,$sql);
  
  $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);