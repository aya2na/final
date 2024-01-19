<?php 'header.php'; ?>
<link rel="stylesheet" href="./css/mng.css">
<h1>カテゴリ追加画面</h1>
    <div class="a">
        <a href='management-output.php'>管理者画面へ</a>
    </div>
    <div class="insert">
        <form action="category-output.php" method="post">
            カテゴリ<input type="text" name="category_name" class="form">
                <input type="submit" value="追加">
        </form>
    </div>
<?php 'footer.php';?>