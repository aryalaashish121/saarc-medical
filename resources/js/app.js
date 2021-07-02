require('./common/common');
require('./bootstrap');

window.Vue = require('vue').default;

import eventBus from "./common/event";
import store from './common/store';
import VueProgressBar from 'vue-progressbar';

Vue.component('user-component', require('./user/user').default);
Vue.component('admin-component', require('./admin/Admin.vue').default);
import vuetify from './plugins/vuetify'

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
    vuetify,
    el: '#app'
});
