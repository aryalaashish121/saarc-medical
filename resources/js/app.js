require('./common/common');
require('./bootstrap');

window.Vue = require('vue').default;

import eventBus from "./common/event";
import VueProgressBar from 'vue-progressbar';


import vuetify from './plugins/vuetify';
import router from './router';

import VueFbCustomerChat from 'vue-fb-customer-chat'

Vue.use(VueFbCustomerChat, {
    page_id: 2305130609529832, //  change 'null' to your Facebook Page ID,
    theme_color: '#333333', // theme color in HEX
    locale: 'en_US', // default 'en_US'
})
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
Vue.use(VueToast,
    { position: 'top' });

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

const app = new Vue({
    eventBus,
    router,
    vuetify,
    el: '#app',
    data() {
        return {
            membership_data: [],

            drawer: true,
            path: "/dashboard",
        };
    },

    methods: {

        clickLogout(logoutUrl, redirectLogoutUrl) {
            axios.post(logoutUrl).then(response => {
                window.location.href = redirectLogoutUrl;
            });
        },
        checkMembership() {
            axios.get('/check-user').then((res) => {
                if (this.membership_data.status == true) {
                    return true;
                } else {
                    return false;
                }
            });
        },

    },

});
