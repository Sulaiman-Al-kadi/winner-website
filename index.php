<?php
include './inc/db.php';
include './inc/form.php';

$sql = 'SELECT * FROM USER';
$result = mysqli_query($conn , $sql);
$user = mysqli_fetch_all($result,MYSQLI_ASSOC);





//we must always close the database  at the end
mysqli_free_result($result);
mysqli_close($conn);
?> 
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">


<!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح معنا </h1>
      <p class="lead fw-normal">بافي على فتح التسجيل</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    
  </div>



<ul class="list-group list-group-flush">
  <li class="list-group-item">لوريم لوريم لو ريم مبستبيسبتيكنبشسشسيشسي من اليمين الى اليسار</li>
  <li class="list-group-item">لوريم لوريم لو ريم مبستبيسبتيكنبشسشسيشسي من اليمين الى اليسار</li>
  <li class="list-group-item">لوريم لوريم لو ريم مبستبيسبتيكنبشسشسيشسي من اليمين الى اليسار</li>
  <li class="list-group-item">لوريم لوريم لو ريم مبستبيسبتيكنبشسشسيشسي من اليمين الى اليسار</li>
  <li class="list-group-item">لوريم لوريم لو ريم مبستبيسبتيكنبشسشسيشسي من اليمين الى اليسار</li>
</ul> -->



<form class="mt=5" action="index.php" method = "POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" value="<?php echo $fName; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']; ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم العائلة</label>
    <input type="text"name="lastName" value="<?php echo $lNAme; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError']; ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>

  <button type="submit" name = "submit" class="btn btn-primary">ارسال المعلومات</button>
</form>

</div>




<!-- <?php foreach($user as $user) : ?>
 <h3><?php echo htmlspecialchars($user['firstName']) . ' ' .  htmlspecialchars($user['lastname']). ' ' .  htmlspecialchars($user['email']);  ?> </h3>
<?php endforeach ?> -->

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>