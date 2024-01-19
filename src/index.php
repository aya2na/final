<?php 'header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="slick/slick-theme.css">
<link rel="stylesheet" href="./css/style.css">
    <!-- ヘッダー -->
    <div id="app">
        <div class="tabs is-light">
            <ul class="header-menu">
                <li v-for="(list,i) in lists" :key="i" class="header-list">
                    <a :href="list.path">{{list.label}}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ヘッダー -->
<!-- メイン -->
<div class="body">
    <div class="slideshow">
        <!-- imagesフォルダ内にある画像を表示  -->
        <!-- ここに4行追加 -->
            <img src="img/library1.png">
            <img src="img/library2.png">
            <img src="img/library3.png">
            <img src="img/library4.png">
    </div> 
    <script src="script/jquery-3.7.0.min.js"></script>
    <!-- スライドショーで使うプラグイン「slick」のJavaScriptを読み込む -->
    <script src="slick/slick.min.js"></script>
    <script src="script/slideshow.js"></script>
</div>
    <!-- フッター -->
    <div id="footer">
            <ul class="footer-menu">
            <li v-for="(library,l) in librarys" :key="l" class="footer-list">
                {{ library.label }}:{{ library.value }}
            </li>
        </div>
    </div>
    <!-- フッター -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> 
        <script src="./script/header.js"></script>
        <script src="./script/footer.js"></script>
        <script src="./script/humburger.js"></script>
<?php 'footer.php';?>