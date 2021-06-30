
require('./bootstrap');

window.Vue = require('vue').default;

import cruds from "./common/cruds";
import eventBus from "./common/event";
Vue.component('user-component', require('./user/user').default);


const app = new Vue({
    el: '#app',
    cruds,
    eventBus
});
