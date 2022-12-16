<?php


   include "./inc/conn.php";
   include './inc/form.php';
   include './inc/connClose.php';
   include "./inc/select.php";
 
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
     <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>





        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
                <img  class="imge"src="./images/marwan.png" alt="">
                <h1 class="display-4 fw-normal">اربح مع مروان</h1>
                <p class="lead fw-normal">باقي علة فتح التسجيل</p>
                <h3 id="countdown"></h3>
                <p class="lead fw-normal">السحب على ربح زميرة</p>
                
                  
            </div>
               <div class="container">
                <h3>للدخول في السحب يرجى اتباع مايلي </h3>
                 <ul class="list-group list-group-flush">
                <li class="list-group-item">تابعني على فيسبوك</li>
                <li class="list-group-item">للاستفسار التواصل واتساب</li>
                <li class="list-group-item">صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
                <li class="list-group-item">يتم اختيار اسم واحد بشكل عشوائي</li>
                <li class="list-group-item">الرابح سيحصل على زميرة مجانية </li>
                </ul>
               </div>
        </div>


      

<div class="container">

<div class="position-relative  text-center ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">

    <form  action="index.php" method="POST">
        <h3>الرجاء ادخال معلوماتك</h3> 
        <div class="mb-3">
        <label for="firstname" class="form-label">الاسم الاول</label>
        <input type="text" name="firstname" id="firstname" class="form-control"  value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>"  aria-describedby="emailHelp">
        <div  class="form-text error"> <?php echo $errors['firstNameError']; ?> </div>
        </div>
            <div class="mb-3">
        <label for="lastname" class="form-label">الاسم الاخير</label>
        <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>"  aria-describedby="emailHelp">
        <div  class="form-text error"> <?php echo $errors['lastNameError'];?> </div>
        </div>
            <div class="mb-3">
        <label for="email" class="form-label">البريد الالكتروني</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"  aria-describedby="emailHelp">
        <div  class="form-text error"> <?php echo $errors['emailError'];?> </div>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">تسجيل</button>
    </form>
       </div>
        </div>
</div>





<div class="loader-con">

<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>



<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">
        <button type="button" id="winner" class="btn btn-primary" >
        اختيار الرابح</button>
</div>
<!-- Modal -->
<div id="modal" class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title fs-5" id="modalLabel">الرابح في المسابقة الخايسة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($user as $us):  ?>
          <h5 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars( $us['firstName']) ." ".  htmlspecialchars( $us['lastName']);?></h5>
        <?php endforeach; ?>
      </div>
     
    </div>
  </div>
</div>


























  

    <!-- <div id="cards" class="row mb-5 pb-5">
       
       

            <div class="col-sm-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">
                        <h5 class="card-title"> </h5>
                            <p class="card-text"><?php echo htmlspecialchars($us['email']);?></p>
        
                    </div>
                </div>
            </div>
        
    </div> -->
   <script src="./js/bootstrap.bundle.min.js"></script>

   <script src="./js/loader.js"></script>
   <script src="./js/script.js"></script>
</body>
</html>
