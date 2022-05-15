<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php
    require('db.php');
    $phone_number = $_GET['phone_number'];
    $color = $_GET['color'];
    $capacity = $_GET['capacity'];
    $city = $_GET['city'];
    $adress = $_GET['address'];
    $house_desc = $_GET['house_desc'];
    $bank_number = $_GET['bank_number'];
    $exp_date = $_GET['exp_date'];
    $cvc = $_GET['cvc'];

    if (strlen($phone_number) != 10) {
        die("يجب ان يحتوي رقم الهاتف على 10 ارقام. اعد المحاولة<br>") ;
    }

    if (strlen($bank_number) != 13) {
        die("يجب ان يحتوي رقم البطاقة البنكية على 13 رقما . اعد المحاولة<br>") ;
    }

    if (strlen($cvc) != 3) {
        die("يجب ان يحتوي رقم الcvc على 3 ارقام. اعد المحاولة") ;
    }




    $query = "INSERT INTO buyers_request(phone_number ,capacity , color , city , adress, house_description , card_number , 
    expiration_date , cvc) VALUES('$phone_number','$capacity', '$color','$city', '$adress' , '$house_desc' , $bank_number
     , '$exp_date' , $cvc )";

    $qresult = mysqli_query( $conn, $query );

    if ($qresult) {
        echo "تم ارسال طلبك بنجاح";
    } else {
        echo  "حدث خطأ ما الرجاء المحاولة لاحقا";
    }



?>
</body>
</html>

