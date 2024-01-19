new Vue({
    el:'#app',
    data(){
        return{
            lists:[
                {label:'トップページ',path:'index.php'},
                {label:'開館情報',path:'schedule.php'},
                {label:'イベント',path:'event.php'},
                {label:'おすすめ図書',path:'recommend.php'},
                {label:'図書検索',path:'search.php'},
                {label:'マイページ',path:'mypage.php'}
            ]
        };
    }
});
