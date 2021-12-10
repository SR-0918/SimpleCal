<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "area_cal.css">
    <title>calculatepage</title>
</head>
<body>
<header>
    <div class="header-set">
        <div class="header-right">
            <div class="tab-right">
                <a href="toppage.php">TOP &ensp;</a>
            </div>
            <div class="tab-right">
                <a href="filter.php">デジタルフィルタ設計 &ensp;</a>
            </div>
            <div class="tab-right">
                <a href="radius.php">面積 &ensp;</a>
            </div>
        </div>
    </div>
</header>


    <div class="result">
        <?php
            if(isset($_POST['calculate'])){
                 $radius_r =$_POST['radius_value'];
            }

        ?>


        <div class="cal_result">
             <p>面積:<?php 
                    if(@$radius_r >0){
                        $area_value = $radius_r*$radius_r*pi(); 
                        echo @$area_value;
                    }else{
                        echo "半径が0を下回ることはありません.。";
                    }
                ?>
            </p>
        </div>
    </div>
    <div class="button">
        <input onclick="location.href='radius.php'" type="submit" value="戻る">
    </div>
</body>
</html>