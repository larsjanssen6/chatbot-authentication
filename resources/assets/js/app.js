window.Vue = require('vue');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
require('es6-promise').polyfill();

Vue.component('chatbot-login', require('./login.vue'));

let app = new Vue({
    el: '#app'
});