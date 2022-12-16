<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
       
       
         


      }
             $errors = [
            'firstNameError' => '',
            'lastNameError' => '',
            'emailError' => '',
        ];
      

    if (isset($_POST['submit'])){

           
        $firstname=mysqli_real_escape_string($conn,$_POST['firstname']); 
        $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);  
        $email= mysqli_real_escape_string($conn,$_POST['email']);  
        
       


        $sql= "INSERT INTO users(firstname,lastname,email)
        Values('$firstname', '$lastname', '$email')";


        if(empty($firstname)){
            $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
        }elseif(empty($lastname)){
             $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
        }elseif(empty($email)){
             $errors['emailError'] = 'يرجى ادخال البريد الالكتروني  ';
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] = 'يرجى ادخال البريد الالكتروني بشكل صحيح';
        }
        else{
                 if(mysqli_query($conn,$sql)){
                 header('Location: index.php');
                 echo 'success';
                 }else{
                    echo 'Error: '. mysqli_error($conn);
                 }
        }

       
        
    }