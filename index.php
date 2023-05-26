<!DOCTYPE html>
<html lang="ja">

    <head>

        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <img src="./4eachblog_logo.jpg" class="logo">

    </head>

    <body>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="main_container">

        <?php

            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select * from 4each_keijiban");

        ?>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>

                <form method="post" action="insert.php">
                    <p class="midashi_1">入力フォーム</>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

                <?php

                    while($row = $stmt->fetch()){
                        echo "<div class='article'>";
                        echo "<p class='midashi_2'>".$row['title']."</p>";
                        echo "<p>";
                        echo $row['comments'];
                        echo "</p>";
                        echo "</div>";
                    }

                ?>

            </div>
            
            <div class="right">
                <h2>人気の記事</h2>
                <p class="idt">PHPオススメ本</p>
                <p class="idt">PHP Myadminの使い方</p>
                <p class="idt">今人気のエディタ top5</p>
                <p class="idt">HTMLの基礎</p>
                <h2>オススメリンク</h2>
                <p class="idt">インターノウス株式会社</p>
                <p class="idt">XAMPPのダウンロード</p>
                <p class="idt">Eclipseのダウンロード</p>
                <p class="idt">Bracketsのダウンロード</p>
                <h2>カテゴリ</h2>
                <p class="idt">HTML</p>
                <p class="idt">PHP</p>
                <p class="idt">MySQL</p>
                <p class="idt">JavaScript</p>
            </div>
        </div>
    </main>
    <footer>
        copyright © internous | 4each blog the which provides A to Z about programming.
    </footer>
    </body>
</html>