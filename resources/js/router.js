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
    },
    {
        path: '/admin/members',
        name: 'admin.members',
        component: require('./admin/members/Members').default
    },
    {
        path: '/admin/trash',
        name: 'admin.trash',
        component: require('./admin/members/Trash').default
    },

    {
        path: '/admin/logout',
        name: 'admin.logout',
        component: require('./admin/dashboard/logout').default
    },


];
const router = new Router({
    routes,
    // mode: 'history',

});

export default router;