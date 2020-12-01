<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>いつも使いまわしてるやつ</title>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://kansai-gamer.github.io/js/style.css">
    </head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h1>い つ も の</h1>
                </div>
            </div>
        </header>
    </div>
    <hr>
    <div class="container">

        <?php
        $str = "リボルビング払いに 手を出しました 限度額は少ないから 返せなくなることはないんじゃね？（フラグ）";
        $cut = explode(" ", $str);
        $echo = "";
        for($i = 0; $i < count($cut); $i++){
            $echo .= $cut[$i] . "、";
        }
        echo rtrim($echo, "、");
        ?>
    </div>
        <hr>
        <div class="container">
            <footer>
                <p>&copy; <a href="https://github.com/kansai-gamer" target="_self">kansai-gamer</a></p>
            </footer>
        </div>
</body>
</html>

<!-- 今日ググったやつ
http://cly7796.net/wp/php/delete-the-last-character-in-php/ -->