<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
    <h1>更新画面</h1>
    <div class="a">
        <a href='management-output.php'>管理者画面へ</a>
    </div>
    <?php
        $pdo=new PDO($connect,USER,PASS);
        //図書ID
        $id = $_POST['id'];
        $sql=$pdo->prepare('select * from library where id=?');
        $sql->execute([$_POST['id']]);
        echo '<div class="update">';
        foreach ($sql as $row) {
            echo '<form action="update-output.php" method="post">';
                echo '　図書名<input type="text" name="library_name" value="',$row['library_name'],'" class="form"><br>';
                echo '　著者名<input type="text" name="author_name" value="',$row['author_name'],'" class="form"><br>';
                echo '　出版社<input type="text" name="library_publisher" value="',$row['library_publisher'],'" class="form"><br>';
                echo '画像URL<input type="text" name="img_url" value="',$row['img_url'],'" class="form"><br>';
                echo 'お勧め度<input type="text" name="recommend_id" value="',$row['recommend_id'],'" class="form"><br>';
                echo 'カテゴリ<select name="category">';
                foreach ($pdo->query('select * from category') as $row) {
                    echo '<option value="',$row['category_id'],'">',$row['category_name'],'</option> ';   
                }
                echo '</select><br>';
                echo '<input type="hidden" name="id" value="',$id,'">';
                echo '<div class="submit">';
                echo '<input type="submit" value="更新">';
                echo '</div>';
            echo '</form>';
        }
        echo '</div>';
    ?>
<?php 'footer.php';?>