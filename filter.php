<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="filter.css">
    <title>デジタルフィルタ設計</title>
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

    <div class="tytle">
        <?='デジタルフィルタの設計'?><br />
    </div>
    <div class="about">
        <?='ここではLPF,HPFの値設定または、値から周波数を求めます。'?><br />
        <?='周波数を入力する場合は小数点以下第5位までにして下さい。'?><br />
        <?='HPFとLPFの両方に何らかの値を入れてください。'?><br />
    </div>

    <form action="fil_cal.php" method = "post">
        <div class="HPF">
            <?='HPF'?> 
            <input type="number" name="HPF_value"  pattern = "^[0-9]+$" size="15" step="0.00001"  required>
            <div class="error">
                <?php
                echo "!入力してください!";
                ?>

            </div>
        </div>
        <div class="LPF">
            <?='LPF'?>
            <input type="number"  name="LPF_value"  pattern = "^[0-9]+$" size="15" step="0.00001"   required>
            <div class="error">
                <?php
                echo "!入力してください!";
                ?>
            </div>
        </div>

        <div class="button">
            <input onclick="location.href='./fil_cal.php'" type="submit" name="calculate" value="計算">
        </div>
    </form>
    <div>
    
</body>
</html>