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
    <?php
    $pdo=new PDO($connect,USER,PASS);
    echo '<div class="recommend">';
        echo '<div class="re">';
        foreach ($pdo->query('select * from library where recommend_id = "s" ') as $row) {
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