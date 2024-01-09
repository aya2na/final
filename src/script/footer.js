new Vue({
    el:'#footer',
    data(){
        return{
            librarys:[
                {label:'図書館名',value:'〇〇図書館'},
                {label:'開館時間',value:'〇時～〇時'},
                {label:'休館日',value:'毎週〇曜日・年末年始・図書整理期間'},
                {label:'住所',value:'〇〇県〇〇市〇〇町xxx-xx'},
                {label:'電話番号',value:'0000-00-0000'},
                {label:'mail',value:'xxxxx-xx@xxxx.ac.jp'}
            ]
        };
    }
});