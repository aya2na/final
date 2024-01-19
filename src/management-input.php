<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<header>
    <h1>管理者ログイン画面</h1>
</header>
<div class="a">
    <a href='index.php'>トップ画面へ</a>
</div>
<?php
    echo '<div class="logform">';
        echo '<form action="management-output.php" method="post">';
        echo '　ログイン<input type="text" name="login" style="width: 200px; height: 30px;"><br>';
        echo 'パスワード<input type="password" name="password" style="width: 200px; height: 30px;"><br>';
            echo '<div class="submit">';
                echo '<input type="submit" value="ログイン">';
            echo '</div>';
        echo '</form>';
    echo '</div>';
?>

<?php 'footer.php';?>