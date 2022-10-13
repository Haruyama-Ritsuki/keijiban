<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>

    <body>

        <img src="4eachblog_logo.jpg" class="logo">
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
        
            <div class="main-container">
                
                <div class="left">
                    
                    <div class="left-header">
                        プログラミングに役立つ書籍
                    </div>

                    <div class="入力フォーム">    
        
                        <h1>入力フォーム</h1>
                        <form method="post" action="insert.php">

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

                    </div>

                    <?php

                        mb_internal_encoding("utf8");
                        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                        $stmt = $pdo->query("select*from 4each_keijiban");

                        while($row = $stmt->fetch()){

                        echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments'];
                        echo "</div>";
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                        }

                    ?>

                </div>

                <div class="right">
                    
                    <div class="right-h1">人気の記事</div>
                    <ul class="right-m1">
                        <li>PHPオススメ本</li>
                        <li>PHP Myadminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    
                    <div class="right-h1">オススメリンク</div>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    
                    <div class="right-h1">カテゴリ</div>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                    
                </div>

            </div>
        
        </main>

        <footer>

            copyright © internous │ 4each blog the which provides        

        </footer>

    </body>

</html>
