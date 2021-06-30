import Vue from 'vue';
import Router from 'vue-router';
window.Vue = Vue;
Vue.use(Router);

const routes = [
    {
        path: '/',
        redirect: '/dashboard'
    },
    {
        path: '/dashboard',
        name: 'admin.dashboard',
        component: require('./admin/dashboard/Home').default
    }
];
const router = new Router({
    routes,
    // mode: 'history',

});

export default router;