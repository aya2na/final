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
<div class="event">
        <div id="1" class="month">
            <img src="img/event1.png"></img>
        </div>
        <div id="2" class="month" >
            <img src="img/event2.png"></img>
        </div>
        <div id="3" class="month" style="display:none;">
            <img src="img/event3.jpg"></img>
        </div>
        <div id="4" class="month" style="display:none;">
            <img src="img/event4.png"></img>
        </div>
        <div id="5" class="month" style="display:none;">
            <img src="img/event5.png"></img>
        </div>
        <div id="6" class="month" style="display:none;">
            <img src="img/event6.png"></img>
        </div>
        <div id="7" class="month" style="display:none;">
            <img src="img/event7.png"></img>
        </div>
        <div id="8" class="month" style="display:none;">
            <img src="img/event8.png"></img>
        </div>
        <div id="9" class="month" style="display:none;">
            <img src="img/event9.png"></img>
        </div>
        <div id="10" class="month" style="display:none;">
            <img src="img/event10.png"></img>
        </div>
        <div id="11" class="month" style="display:none;">
            <img src="img/event11.png"></img>
        </div>
        <div id="12" class="month" style="display:none;">
            <img src="img/event12.png"></img>
        </div>
    </div>
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