new Vue({
    el:'#hum',
    data(){
        return {
            isActive:false
        };
    },
    methods:{
        toggleButton(){
            this.isActive = !this.isActive;
        }
    }
});