<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<?php require 'db-connect.php';?>
<?php
    echo '<h1>管理者画面</h1>';
    echo '<div class="a">';
        echo "<a href='index.php'>トップ画面へ</a>";
    echo '</div>';
    // ログイン機能（あとで）
    // $pdo=new PDO($connect,USER,PASS);
    // $sql=$pdo->prepare('select * from customer where login=? and password=?');
    // $sql->execute([$_POST['login'],$_POST['password']]);

    //ボタン
    echo '<div class="btn">';

        //追加
        // echo '<div class="btn">';
        echo '<form action="insert-input.php" method="post">';
        echo '<button>追加</button>';
        echo '</form>';
        // echo '</div>';

        //更新
        // echo '<div class="btn">';
        echo '<form action="update.php" method="post">';
        echo '<button>更新</button>';
        echo '</form>';
        // echo '</div>';

        //削除
        // echo '<div class="btn">';
        echo '<form action="delete-input.php" method="post">';
        echo '<button>削除</button>';
        echo '</form>';
        // echo '</div>';

        //カテゴリ追加
        // echo '<div class="btn">';
        echo '<form action="category-insert.php" method="post">';
        echo '<button>カテゴリ追加</button>';
        echo '</form>';
        // echo '</div>';

    echo '</div>';

    $pdo=new PDO($connect,USER,PASS);
    echo '<div class="tbl">';

        //図書一覧
        echo '<table border class="li">';
        echo '<tr><th>図書ID</th><th>図書名</th><th>著者名</th><th>出版社</th><th>カテゴリ</th><th>画像URL</th><th>お勧め度(s,a,b,c)</th></tr>';
        foreach ($pdo->query('select * from library') as $row) {
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['library_name'], '</td>';
            echo '<td>', $row['author_name'], '</td>';
            echo '<td>', $row['library_publisher'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['img_url'], '</td>';
            echo '<td>', $row['recommend_id'],'</td>';
            echo '</tr>';
        }

        //カテゴリ一覧
        echo '<table border class="ca">';
        echo '<tr><th>カテゴリID</th><th>カテゴリ</th></tr>';
        foreach ($pdo->query('select * from category') as $row) {
            echo '<tr>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>', $row['category_name'], '</td>';
            echo '</tr>';
        }
    echo '</div>';

?>
<?php 'footer.php';?>