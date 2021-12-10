<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "fil_cal.css">
    <title>calculatepage</title>
</head>
<body>
<header>
    <div class="header-set">
        <div class="header-right">
            <div class="tab-right">
                <a href="index.php">TOP &ensp;</a>
            </div>
            <div class="tab-right">
                <a href="">デジタルフィルタ設計 &ensp;</a>
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
                 $HPFfrequency =$_POST['HPF_value'];
                $LPFfrequency =$_POST['LPF_value'];
            }

        ?>

        <div class="cal_result">
            <p>ハイパスフィルタ計算結果:<?php 
                if(@$HPFfrequency >0){
                    $HPFcalculate = (1.5708/(2*pi()*$HPFfrequency));
                    echo @$HPFcalculate."/".@$HPFfrequency;
                }else{
                    echo "0以下では割れません";
                }
                ?>
            </p>
                
            <p>ローパスフィルタ計算結果:<?php 
                if(@$LPFfrequency >0){
                    $LPFcalculate = (1/(2.256*$LPFfrequency));
                    echo @$LPFcalculate."/".@$LPFfrequency;
                }else{
                    echo "0以下では割れません";
                }
                ?>
            </p>

        </div>
    </div>
    <div class="button">
        <input onclick="location.href='filter.php'"  type="submit" value="戻る">
    </div>
</body>
</html>