<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
    <h1>更新画面</h1>
    <?php
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('update library set library_name = ? , author_name = ? , library_publisher = ? , category_id = ? , img_url = ? ,recommend_id = ? where id = ?');
        if(empty($_POST['library_name'])){
            echo '<p class="ng">入力してください</p>';
            echo '<div class="a">';
            echo "<a href='update-input.php'>更新画面へ</a>";
            echo '</div>';
        }else if($sql->execute([$_POST['library_name'],$_POST['author_name'],$_POST['library_publisher'],$_POST['category'],$_POST['img_url'],$_POST['recommend_id'],$_POST['id']])){
            echo '<p class="ok">更新しました。</p>';
        }

        echo '<table border=1 class="te">';
        echo '<tr><th>図書ID</th><th>図書名</th><th>著者名</th><th>出版社</th><th>カテゴリ</th><th>画像URL</th><th>お勧め度(s,a,b,c)</th></tr>';
        foreach ($pdo->query('select * from library') as $row) {
            echo '<tr>';
            echo '<td>', $row['id'], '</td>'; 
            echo '<td>', $row['library_name'], '</td>';
            echo '<td>', $row['author_name'], '</td>';
            echo '<td>', $row['library_publisher'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['img_url'],'</td>';
            echo '<td>', $row['recommend_id'],'</td>';
            echo '</tr>';
        }
        echo '<div class="a">';
        echo "<a href='management-output.php'>管理者画面へ</a>";
        echo '</div>';
    ?>
<?php 'footer.php';?>