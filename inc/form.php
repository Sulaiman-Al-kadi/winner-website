<?php
$fName = $_POST['firstname'];
$lNAme = $_POST['lastname'];
$email = $_POST['email'];


if(isset($_POST['submit'])){
   // echo $fName . " " . $lNAme . "" . $email;

$fName =  mysqli_real_escape_string($conn,$_POST['firstName']);
$lNAme  = mysqli_real_escape_string($conn,$_POST['lastName']);
$email =  mysqli_real_escape_string($conn,$_POST['email']);

$errors = [
    'firstNameError' => '',
    'lastNameError'  => '',
    'emailError'     => ''
];

// create sql command
$sql = "INSERT INTO user(firstName,lastName,email);
VALUES ('$fName','$lNAme ','$email')";



// check if the input is empty or not
if(empty($fName)){
    $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
}


elseif(empty($lNAme)){
    $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
}


elseif(empty($email)){
    $errors['emailError'] = 'يرجى ادخال  البريد الالكتروني';
}

// check if the email is valid or not
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'يرجى صيغة البريد الالكتروني  الصحيحة';
}
else{
    if(mysqli_query($conn , $sql)){
        echo 'suceess';
    }
    else{
        echo 'error' . mysqli_connect_error($conn); 
    
    }
}



    // insert the command in the using connection 
}
?>

