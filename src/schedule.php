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
        <!-- ↓カレンダー表示 -->
        <select class="schedules" id="schedule" onchange="month();">
            <?php
            for($i = 1; $i <=12; $i++){
                echo '<option value="',$i,'">',$i,'月</option>';
            }
            ?>
        </select>
    <!-- display:noneで最初は隠す -->
    <div class="schedule">
        <div id="1" class="month">
            <img src="img/schedule1.jpg"></img>
        </div>
        <div id="2" class="month" style="display:none;">
            <img src="img/schedule2.jpg"></img>
        </div>
        <div id="3" class="month" style="display:none;">
            <img src="img/schedule3.jpg"></img>
        </div>
        <div id="4" class="month" style="display:none;">
            <img src="img/schedule4.png"></img>
        </div>
        <div id="5" class="month" style="display:none;">
            <img src="img/schedule5.png"></img>
        </div>
        <div id="6" class="month" style="display:none;">
            <img src="img/schedule6.png"></img>
        </div>
        <div id="7" class="month" style="display:none;">
            <img src="img/schedule7.png"></img>
        </div>
        <div id="8" class="month" style="display:none;">
            <img src="img/schedule8.png"></img>
        </div>
        <div id="9" class="month" style="display:none;">
            <img src="img/schedule9.png"></img>
        </div>
        <div id="10" class="month" style="display:none;">
            <img src="img/schedule10.png"></img>
        </div>
        <div id="11" class="month" style="display:none;">
            <img src="img/schedule11.png"></img>
        </div>
        <div id="12" class="month" style="display:none;">
            <img src="img/schedule12.png"></img>
        </div>
    </div>
    <!-- ↑カレンダー表示 -->

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
<script src="./script/schedule.js"></script>
<?php 'footer.php';?>