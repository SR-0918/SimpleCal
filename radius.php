<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="radius.css">
    <title>面積</title>
</head>
<body>
<header>
    <div class="header-set">
        <div class="header-right">
            <div class="tab-right">
                <a href="index.php">TOP &ensp;</a>
            </div>
            <div class="tab-right">
                <a href="filter.php">デジタルフィルタ設計 &ensp;</a>
            </div>
            <div class="tab-right">
                <a href="">面積 &ensp;</a>
            </div>
        </div>
    </div>
</header>

    <div class="tytle">
        <?='面積の計算'?><br />
    </div>
    <div class="about">
        <?='ここでは面積の計算を行います'?><br />
        <?='半径を入力して下さい'?><br />
    </div>

    <form action="area_cal.php" method = "post">
        <div class="radius">
            <?='半径'?> 
            <input type="number" name="radius_value"  pattern = "^[0-9]+$" size="15" step="0.1"  required>
            <div class="error">
                <?php
                echo "!入力してください!";
                ?>

            </div>
        </div>

        <div class="button">
            <input onclick="location.href='./area_cal.php'" type="submit" name="calculate" value="計算">
        </div>
    </form>
    
</body>
</html>