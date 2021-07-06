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
        component: require('./dashboard/Home').default
    },
    {
        path: '/admin/members',
        name: 'admin.members',
        component: require('./members/Members').default
    },
    {
        path: '/admin/trash',
        name: 'admin.trash',
        component: require('./members/Trash').default
    },
    {
        path: '/admin/membership/request',
        name: 'admin.member-request',
        component: require('./members/Request').default
    },


];
const router = new Router({
    routes,
    // mode: 'history',
    // base: process.env.BASE_URL,
    // mode: 'history',

});

export default router;