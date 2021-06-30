
window.Vue = require("vue");

import Vue from "vue";
window.Vue = Vue;
import cruds from "../common/cruds";
import eventBus from "../common/event";
import router from "./router";
Vue.use(eventBus);

Vue.component('example-component', require('../admin/dashboard/Home.vue').default);

const admin = new Vue({
    eventBus,
    cruds,
    el: "#admin",

});
export default admin;