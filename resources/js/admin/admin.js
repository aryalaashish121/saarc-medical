require('../bootstrap');
require('../common/common');
import _ from 'lodash';
window.Vue = require("vue");
import Vue from "vue";
window.Vue = Vue;

import vuetify from '../plugins/vuetify'
import VueProgressBar from 'vue-progressbar';
import eventBus from "../common/event";
import router from "./router";
Vue.use(eventBus);
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
Vue.use(VueToast,
    { position: 'top' });

import VueFbCustomerChat from 'vue-fb-customer-chat'

Vue.use(VueFbCustomerChat, {
    page_id: 2305130609529832, //  change 'null' to your Facebook Page ID,
    theme_color: '#333333', // theme color in HEX
    locale: 'en_US', // default 'en_US'
})

Vue.use(VueProgressBar, {
    color: '#42B883',
    failedColor: '#b71c1c',
    thickness: '3px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    inverse: false
})


const admin = new Vue({
    eventBus,
    router,
    vuetify,
    el: "#admin",
    data() {
        return {
            drawer: true,
            path: "/dashboard",
        };
    },
    mounted() {

    },
    methods: {

        clickLogout(logoutUrl, redirectLogoutUrl) {
            axios.post(logoutUrl).then(response => {
                window.location.href = redirectLogoutUrl;
            });
        },

    },



});
export default admin;