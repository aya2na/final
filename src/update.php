<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
    <h1>更新画面</h1>
    <div class="a">
        <a href='management-output.php'>管理者画面へ</a>
    </div>
    <?php
        $pdo=new PDO($connect,USER,PASS);
        echo '<form action="update-input.php" method="post">';
        echo '<table border class="te">';
        echo '<tr><th>図書ID</th><th>図書名</th><th>著者名</th><th>出版社</th><th>カテゴリ</th><th>画像URL</th><th>お勧め度(s,a,b,c)</td></tr>';
        foreach ($pdo->query('select * from library') as $row) {
            echo '<tr>';
            echo '<td><input type="radio" name="id" value="',$row['id'],'">', $row['id'], '</td>';
            echo '<td>', $row['library_name'], '</td>';
            echo '<td>', $row['author_name'], '</td>';
            echo '<td>', $row['library_publisher'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['img_url'],'</td>';
            echo '<td>', $row['recommend_id'],'</td>';
            echo '</tr>';
        }
        echo '<div class="sub">';
        echo '<input type="submit" value="更新">';
        echo '</div>';
        echo '</table>';
        echo '</form>';
    ?>
<?php 'footer.php';?>