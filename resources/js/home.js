require('./common/common');
window.Vue = require('vue').default;
import vuetify from './plugins/vuetify';

const app = new Vue({
    vuetify,
    el: '#root',
    data() {
        return {
            path: "/welcome"
        };
    }
})