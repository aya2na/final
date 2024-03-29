<?php 'header.php'; ?>

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
        echo '<div class="btn">';
            // ログイン画面
            echo '<div class="log">';
            echo '<form action="login-input.php" method="post">';
            echo '<button>ログイン画面</button>';
            echo '</form>';
            echo '</div>';

            // 新規登録画面
            echo '<div class="sign">';
            echo '<form action="signin-input.php" method="post">';
            echo '<button>新規登録画面</button>';
            echo '</form>';
            echo '</div>';

            //管理者画面
            echo '<div class="mng">';
            echo '<form action="management-input.php" method="post">';
            echo '<button>管理者画面</button>';
            echo '</form>';
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