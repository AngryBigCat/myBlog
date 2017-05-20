
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

//<edit-self edit-href="{{ route('users.update') }}"></edif-self>

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

        }
    }
});

new Vue({
    el: '#all-user-list',
    data: {
        message: '删除成功',
        seen: false
    },
    mounted() {

    },
    methods: {
        onDeleteUser(delURL, event) {
            let li = event.toElement.parentElement;
            axios.delete(delURL).then((res) => {
                $(li).remove();
                this.message = res.data + ' 已删除';
                this.seen = true;
                setTimeout(() => {
                    this.seen = false;
                }, 1000);
            });
        }
    }
})

new Vue({
    el: '#statuses-box',
    methods: {
        onAppearButtonOver(event) {
            $(event.currentTarget).find('button').show();
        },
        onAppearButtonOut(event) {
            $(event.currentTarget).find('button').hide();
        },
        onDeleteStatus(deleteUrl, event) {
            axios.delete(deleteUrl).then(function (res) {
                let li = event.target.parentNode;
                li.parentNode.removeChild(li);
            });
        }
    }
});



$('.signout').click(function (event) {
    event.preventDefault();
    axios.delete(event.target.href).then(function (response) {
        location.href = '/';
    });
});