<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
<h1>カテゴリ追加画面</h1>
<?php
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('insert into category (category_id,category_name) VALUES (null,?)');
        if(empty($_POST['category_name'])){
            echo '<p class="ng">カテゴリを入力してください</p>';
            echo '<div class="a">';
            echo "<a href='category-input.php'>カテゴリ追加画面へ</a>";
            echo '</div>';
        }else if($sql->execute([$_POST['category_name']])){
            echo '<p class="ok">追加しました。</p>';
        }
        echo '<table class="te" border=1>';
        echo '<tr><th>カテゴリID</th><th>カテゴリ</th></tr>';
        foreach ($pdo->query('select * from category') as $row) {
            echo '<tr>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['category_name'], '</td>';
            echo '</tr>';
        }
        echo '<div class="a">';
        echo "<a href='management-output.php'>管理者画面へ</a>";
        echo '</div>';
?>
<?php 'footer.php'; ?>