<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
<header>
    <h1>登録画面</h1>
</header>
    <div class="a">
        <a href='management-output.php'>管理者画面へ</a>
    </div>
        <?php
        $pdo=new PDO($connect,USER,PASS);
        echo '<div class="insert">';
            echo '<form action="insert-output.php" method="post">';
                echo '　図書名<input type="text" name="library_name" class="form"><br>';
                echo '　著者名<input type="text" name="author_name" class="form"><br>';
                echo '　出版社<input type="text" name="library_publisher" class="form"><br>';
                echo '画像URL<input type="text" name="img_url" value="notimg.jpg" class="form"><br>';
                echo 'お勧め度<input type="text" name="recommend_id" class="form"></br>';
                echo 'カテゴリ<select name="category">';
                foreach ($pdo->query('select * from category') as $row) {
                    echo '<option value="',$row['category_id'],'">',$row['category_name'],'</option> ';   
                }
                echo '</select><br>';
                echo '<div class="submit">';
                echo '<input type="submit" value="登録">';
                echo '</div>';
            echo '</form>';
        echo '</div>';
        ?>
<?php 'footer.php';?>