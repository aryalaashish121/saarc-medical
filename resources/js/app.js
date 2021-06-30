/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from "vue";
import vuetify from './plugins/vuetify';
window.Vue = Vue;
import cruds from "./common/cruds";
import eventBus from "./common/event";
import router from "./router";
Vue.use(eventBus);

Vue.component('example-component', require('./admin/dashboard/Home.vue').default);

const app = new Vue({
    el: '#app',
    vuetify,
    cruds,
    eventBus,
});
