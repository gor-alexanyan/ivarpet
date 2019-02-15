
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');




window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data:{
        name: '',
        surname: '',
        profession: '',
        b_day:'',
        b_month: '',
        b_year: '',
        address:'',
        work_experience:[],
        finds: [],
        education:'',
        ability:'',
        lang:'',
        certificate:'',
        hobby:'',
        gender:'',
        avatar:null,
        work: '<textarea name="work_experience[]" data-vue="work_experience"  v-on:focusout="addFind"></textarea><button type="button" class="add_area">+</button>'
    },

    created(){
        axios.get('http://ivarpet.loc/vacancy/')
            .then(response => {
                console.log(response); // show if success
                this.m = response.data; //we are putting data into our posts array
            })
            .catch(function (error) {
                console.log(error); // run if we have error
            });
    },
    methods:{
        GetImage(e){
            let image = e.target.files[0];
            let reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = e => {
                this.avatar= e.target.result;
            }

        },
        addFind: function (event) {
            this.work_experience.push(event.target.value)
        },
        addArea: function () {

        },
        render: function (createElement) {
            return createElement('textarea')
        }
    }
});
