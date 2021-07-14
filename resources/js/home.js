require('./common/common');
require('./bootstrap');

window.Vue = require('vue').default;
import vuetify from './plugins/vuetify';

Vue.component('contact', require('./user/resources/ContactUs').default)
Vue.component('resources', require('./user/resources/Resources').default)

const app = new Vue({
    el: '#root',
    vuetify,
})