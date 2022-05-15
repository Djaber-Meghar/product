<?php
require('db.php');
require_once('functions.php');

    $product = get_product();
    $color = get_colors();
    $capacity = get_capacity();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Product </title>
</head>
<body>
    <div class="page_container">
        <header>
                <h1>moonstore</h1>
        </header>
        <h2 class="product_title"><?php echo $product[0]->name; ?></h2>
        <div class="product_img">
            <div class="slideshow-container">
                <div class="mySlides1">
                    <img src="img/1.jpg" alt="" style="width:100%">
                </div>

            <div class="mySlides1">
                <img src="img/2.jpg" alt="" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="img/3.jpg" alt="" style="width:100%">
                </div>
  
                <div class="mySlides1">
                    <img src="img/4.jpg" alt="" style="width:100%">
                </div>
  
                <div class="mySlides1">
                    <img src="img/5.jpg" alt="" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1, 0)"style="background:gray;">&#10095;</a>
                <a class="next" onclick="plusSlides(1, 0)"style="background:gray;">&#10094;</a>
                
            </div>
        </div>
        <div class="product_inf">
            <form action="send_info.php"method="get">
                
                <br>
                <h4>معلومات الشحن</h4>
                <br>
                <p class="product_details">
                    السعة:
                    <br>
                    <select name="capacity" id="capacity"onChange="check();">
                        <option value="" selected disabled></option>
                        <?php
            
            $capacitys = get_capacity();
            if ($capacitys == NULL) {
                echo "There is a problem denied showing users correctly";
            }
        
            $ucount = count($capacitys);
            if ($capacitys == 0) {
                echo "No user found in the database";
            }
        
            for ($i=0; $i < $ucount ; $i++) {
                $capacity = $capacitys[$i];
                echo "<option> $capacity->capacity</option>";
            } 
        
            ?>
                    </select>
                    <br> 
                    اللون :
                    <br>
                    <select name="color" id="color"onChange="check();">
                        <option value="" selected disabled></option>
                        <?php
            
            $colors = get_colors();
            if ($colors == NULL) {
                echo "There is a problem denied showing users correctly";
            }
        
            $ucount = count($colors);
            if ($colors == 0) {
                echo "No user found in the database";
            }
        
            for ($i=0; $i < $ucount ; $i++) {
                $color = $colors[$i];
                echo "<option> $color->color</option>";
            } 
        
            ?>
                    </select>
                </p>
                <input type="text"placeholder="رقم الهاتف"size="10"maxlength="10"name="phone_number"onchange="checknumbers(0);"><br>
                <span>يجب ان يتكون رقم الهاتف من 10 ارقام</span>
                <input type="text"placeholder="المدينة"name="city">
                <input type="text" placeholder="الحي "name="address">
                <input type="text" placeholder="وصف المنزل"name="house_desc">
                <br>
                <h4 style="margin-top:20px;">معلومات الدفع</h4>
                
                <input type="text"size="13"maxlength="13"placeholder="رقم البطاقة البنكية"name="bank_number" onchange="checknumbers(4)"><br>
                <span>يجب ان يتكون رقم البطاقة من 13 رقما </span>
                <input type="text"placeholder="23/05"style="min-width:100px;max-width:120px"name="exp_date">
                <input type="text" placeholder="CVC"style="min-width:100px;max-width:120px"size="3"maxlength="3"name="cvc"onchange="checknumbers(6)"> <br>
                <span>يجب ان يتكون رقم cvc من 3 ارقام</span>

                <div class="btn_cnt">
                    <button id="btn">
                        شراء الان
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let slideIndex = [1,1];
        let slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            let i;
            let x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {slideIndex[no] = 1}    
            if (n < 1) {slideIndex[no] = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex[no]-1].style.display = "block";  
        }
    </script>
</body>
</html>