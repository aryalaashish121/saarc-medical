require('./common/common');
require('./bootstrap');

window.Vue = require('vue').default;
import vuetify from './plugins/vuetify';
import router from './router';

const app = new Vue({
    router,
    vuetify,
    el: '#root',
    data() {
        return {
            path: "/welcome"
        };
    }

})