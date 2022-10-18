<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select*from 4each_keijiban");
        ?>

        <div class="logo"><img src="4eachblog_logo.jpg"></div>

        <header>
            <ul>
                <li><a href ="https://www.google.com/imghp?sbi=1">トップ</a></li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
    
        <div class="main-container">
            <div class="left"> 
                
                <div class="contact_form">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <form method="post" action="insert.php">
                        <div>
                            <h3>入力フォーム</h3>
                        </div>

                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="30" name="handlename">
                        </div>

                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="30" name="title">
                        </div>

                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="70" rows="7" name="comments"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="submit" value="送信する">
                        </div>
                    </form>
                </div>

                <?php

                while($row = $stmt->fetch()){

                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
                }

                ?>
                
            </div>
            
            <div class="right">
                <h2>人気の記事</h2>
                <p><a href ="https://www.google.com/imghp?sbi=1">PHPオススメ本</a></p>
                <p>PHP MyAdmminの使い方</p>
                <p>今人気のエディタ Top5</p>
                <p>HTMLの基礎</p>
                <h2>オススメリンク</h2>
                <p>インターノウス株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Blacketsのダウンロード</p>
                <h2>カテゴリ</h2>
                <p>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
        </div>
        <footer>
        copylight©internous | 4each blog the which provides A to Z about programming
        </footer>
    </body>
</html>