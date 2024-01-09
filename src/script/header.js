new Vue({
    el:'#app',
    data(){
        return{
            lists:[
                {label:'TOP',path:'index.php'},
                {label:'SCHEDULE',path:'schedule.php'},
                {label:'EVENT',path:'event.php'},
                {label:'RECOMMEND',path:'recommend.php'},
                {label:'SEARCH',path:'search.php'},
                {label:'MY PAGE',path:'mypage.php'}
            ]
        };
    }
});
