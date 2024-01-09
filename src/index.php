<?php 'header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
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
    <!-- ハンバーガーメニュー -->
    <div id="hum">
        <div 
        :class="{'is-active': isActive}"
        class="btn-humberger"
        @click='toggleButton'
        >
        <div></div>
        <div></div>
    </div>
    <!-- ハンバーガーメニュー -->
<h1>TOP PAGE</h1>

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