<?php 'header.php'; ?>
<?php require 'db-connect.php';?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="./css/style.css">
<!-- ヘッダー -->
<!-- <header> -->
    <div id="app">
        <div class="tabs is-light">
            <ul class="header-menu">
                <li v-for="(list,i) in lists" :key="i" class="menu-list">
                    <a :href="list.path">{{list.label}}</a>
                </li>
            </ul>
        </div>
    </div>
<!-- </header> -->
<!-- メイン -->

    <!-- 全体検索の場合 -->
        <div class="part">
            <form action="search-output.php" method="post">
                図書名<input type="text" name="library_name" class="form">
                著者名<input type="text" name="author_name" class="form">
                <input type="submit" value="送信">
            </form>
        </div>
    <?php
    $pdo=new PDO($connect,USER,PASS);
        // 全件表示⇒対応する図書のみ表示
        echo '<p class="mg">登録されている図書のすべてです。</p>';
        echo '<div class="se">';
            echo '<div id="1" class="all">';
                foreach ($pdo->query('select * from library ') as $row) {
                    $url=$row['img_url'];
                    echo '<img src="img/', $url, '"></img>';
                }
            echo '</div>';
        echo '</div>';   
    ?>
<!-- フッター -->
    <div id="footer">
            <ul class="footer-menu">
            <li v-for="(library,l) in librarys" :key="l" class="footer-list">
                {{ library.label }}:{{ library.value }}
            </li>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> 
<script src="./script/header.js"></script>
<script src="./script/footer.js"></script>
<?php 'footer.php';?>