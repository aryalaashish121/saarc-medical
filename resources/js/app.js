
require('./bootstrap');

window.Vue = require('vue').default;

import cruds from "./common/cruds";
import eventBus from "./common/event";
Vue.component('user-component', require('./user/user').default);
Vue.component('admin-component', require('./admin/Admin.vue').default);
import vuetify from './plugins/vuetify'

const app = new Vue({
    el: '#app',
    cruds,
    eventBus,
    vuetify
});
