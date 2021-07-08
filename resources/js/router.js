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
        name: 'user.dashboard',
        component: require('./user/dashboard/Home').default
    },
    {
        path: '/user/apply',
        name: 'user.apply',
        component: require('./user/Membership/Apply').default
    },
    {
        path: '/user/reapply',
        name: 'membership.edit',
        component: require('./user/Membership/Edit').default
    },
    {
        path: '/user/resources',
        name: 'user.resources',
        component: require('./user/resources/Resources').default
    },
    {
        path: '/user/contactUs',
        name: 'user.contactUs',
        component: require('./user/resources/ContactUs').default
    }
];
const router = new Router({
    routes,
});

export default router;