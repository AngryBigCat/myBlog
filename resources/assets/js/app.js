
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

Vue.component('example', require('./components/Example.vue'));
Vue.component('signup', require('./components/signup.vue'));


new Vue({
    el: '#signup',
    data: {
        name: '',
        email: '',
        password: '',
        password_confirmation: ''
    },
    methods: {
        onSignupSubmit(event) {
            console.log(this.$data);
        }
    }
});

new Vue({
    el: '#signin',
    data: {
        email: '',
        password: '',
    },
    methods: {
        onSigninSubmit(event) {
            console.log(this.$data);
        }
    }
})