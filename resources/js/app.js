require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
import HomePage from './components/index.vue'

import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css' //Vuesax styles


Vue.component('home-page',require('./components/index.vue'))


Vue.config.productionTip = false;
Vue.use(Vuesax)
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import routes from './routers';
const router = new VueRouter({
    routes,
    mode: 'hash',
});

new Vue({
    created() {},
    el: '#app',
    router,
    components: {
        HomePage
    },
    methods: {},
    mounted() {},
});






