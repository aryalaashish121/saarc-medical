require('./common/common');
require('./bootstrap');

window.Vue = require('vue').default;

import eventBus from "./common/event";
import store from './common/store.js';
import VueProgressBar from 'vue-progressbar';

Vue.component('user-component', require('./user/user').default);
Vue.component('admin-component', require('./admin/Admin.vue').default);
import vuetify from './plugins/vuetify';
import router from './router';

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

const app = new Vue({
    eventBus,
    store,
    router,
    vuetify,
    el: '#app'
});
