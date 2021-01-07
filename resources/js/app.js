/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import i18n from './i18n'
import BootstrapVue from 'bootstrap-vue'
import router from './router'
import store from './store/store'
import VueSocialauth from 'vue-social-auth'

Vue.use(BootstrapVue)

Vue.use(VueSocialauth, {
    providers: {
        github: {
            clientId: '',
            redirectUri: '/auth/github/callback' // Your client app URL
        }
    }
})

const lang = localStorage.getItem('lang') || 'en'
require('./bootstrap');

window.Vue = require('vue');

let token = document.head.querySelector('meta[name="csrf-token"]');

window.axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

let bearerToken = sessionStorage.getItem('user_session_key');
if (bearerToken) {
    window.axios.defaults.headers.common['Authorization'] = `Bearer ${bearerToken}`
    window.axios.defaults.headers.common['Content-Type'] = 'application/json'
}


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home', require('./Home').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    i18n,
    router,
    store
});
