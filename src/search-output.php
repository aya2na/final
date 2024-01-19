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
    echo '<p class="mg">検索結果です。</p>';
    // var_dump($_POST['id']);
    $sql=$pdo->prepare('select * from library where library_name like ? and author_name like ?');
    $sql->execute(['%'.$_POST['library_name'].'%','%'.$_POST['author_name'].'%',]);
    $count = $sql->rowCount();
    if($count > 0){
        echo '<p class="mg">該当の図書が見つかりました。';
        echo '<div class="search">';
            echo '<div class="all">';
                foreach ($sql as $row) {
                    $url=$row['img_url'];
                    echo '<img src="img/', $url, '"></img>';
                }
            echo '</div>';
        echo '</div>';
    }else{
        echo '<p class="mg">該当の図書がありません。';
    }
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
<script src="./script/search.js"></script>
<?php 'footer.php';?>