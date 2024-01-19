<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
<h1>削除画面</h1>
<?php
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('delete from library  where id = ?');
        if(empty($_POST['id'])){
            echo '<p class="ng">入力してください</p>';
            echo '<div class="a">';
            echo "<a href='delete-input.php'>削除画面へ</a>";
            echo '</div>';
        }else if($sql->execute([$_POST['id']])){
            echo '<p class="ok">削除しました。</p>';
        }

        echo '<table class="te" border=1>';
        echo '<tr><th>図書ID</th><th>図書名</th><th>著者名</th><th>出版社</th><th>カテゴリ</th><th>画像URL</th><th>お勧め度(s,a,b,c)</th></tr>';
        foreach ($pdo->query('select * from library') as $row) {
            echo '<tr>';
            echo '<td>', $row['id'], '</td>'; 
            echo '<td>', $row['library_name'], '</td>';
            echo '<td>', $row['author_name'], '</td>';
            echo '<td>', $row['library_publisher'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['img_url'], '</td>';
            echo '<td>', $row['recommend_id'], '</td>';
            echo '</tr>';
        }
        echo "<a href='management-output.php'>管理者画面へ</a>";
    ?>
<?php 'footer.php';?>