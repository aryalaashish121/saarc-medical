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
        path: '/members',
        name: 'admin.members',
        component: require('./members/Members').default
    },
    {
        path: '/trash',
        name: 'admin.trash',
        component: require('./members/Trash').default
    },
    {
        path: '/membership/request',
        name: 'admin.member-request',
        component: require('./members/Request').default
    },
];
const router = new Router({
    routes,
});

export default router;