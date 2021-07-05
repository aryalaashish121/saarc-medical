import Vue from 'vue';
import Router from 'vue-router';
Vue.use(Router);

const routes = [
    {
        path: '/',
        redirect: '/dashboard'
    },
    {
        path: '/dashboard',
        name: 'admin.dashboard',
        component: require('./members/Members.vue').default
    },
    {
        path: '/home',
        name: 'admin.dashboard',
        component: require('./members/Members.vue').default
    },
    {
        path: '/admin/members',
        name: 'admin.members',
        component: require('./members/Members.vue').default
    },
    {
        path: '/admin/trash',
        name: 'admin.trash',
        component: require('./members/Trash.vue').default
    },
];
const router = new Router({
    routes,
    mode: 'history',
    base: process.env.BASE_URL,
    // mode: 'history',

});

export default router;