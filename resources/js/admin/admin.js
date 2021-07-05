require('./bootstrap');
window.Vue = require("vue");

import Vue from "vue";
import vuetify from '../plugins/vuetify'
window.Vue = Vue;
import cruds from "../common/cruds";
import eventBus from "../common/event";
import router from "./router";
Vue.use(eventBus);

const admin = new Vue({
    eventBus,
    router,
    vuetify,
    el: "#admin",

});
export default admin;