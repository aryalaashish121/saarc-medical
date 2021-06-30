
window.Vue = require("vue");

import Vue from "vue";
window.Vue = Vue;
import cruds from "../common/cruds";
import eventBus from "../common/event";
import router from "./router";
Vue.use(eventBus);

const admin = new Vue({
    eventBus,
    cruds,
    router,
    el: "#admin",
    data() {
        return {
            path: "/dashboard",
        }

    },
});
export default admin;