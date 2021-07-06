require('../bootstrap');
require('../common/common');
import _ from 'lodash';
window.Vue = require("vue");
import Vue from "vue";
window.Vue = Vue;

import store from '../common/store';
import vuetify from '../plugins/vuetify'
import VueProgressBar from 'vue-progressbar';
import eventBus from "../common/event";
import router from "./router";
Vue.use(eventBus);

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
    store,
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
        dialogOk() {
            store.commit('dialogOk');
        },
        dialogCancel() {
            store.commit('dialogCancel');
        }
    },
    computed: {

        showDialog: {
            get() {
                return store.getters.showDialog;
            },
            set(val) {
                if (!val) store.commit('hideDialog');
            }
        },
        dialogTitle() {
            return store.getters.dialogTitle;
        },
        dialogMessage() {
            return store.getters.dialogMessage;
        },
        dialogType() {
            return store.getters.dialogType;
        },
        dialogIcon() {
            return store.getters.dialogIcon;
        },
        showSnackbar: {
            get() {
                return store.getters.showSnackbar;
            },
            set(val) {
                if (!val) store.commit('hideSnackbar');
            }
        },
        snackbarDuration() {
            return store.getters.snackbarDuration;
        },
        snackbarColor() {
            return store.getters.snackbarColor;
        },
        snackbarMessage() {
            return store.getters.snackbarMessage;
        },
        showLoader() {
            return store.getters.showLoader;
        },


    }

});
export default admin;