import Vue from 'vue';
import Router from 'vue-router';
window.Vue = Vue;
Vue.use(Router);

const routes = [
    {
        path: '/',
        redirect: '/welcome'
    },
    {
        path: '/dashboard',
        name: 'user.dashboard',
        component: require('./user/dashboard/Home').default
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
    },
    {
        path: '/welcome',
        name: 'welcome',
        component: require('./user/resources/Welcome').default
    },
    // {
    //     path: '/contact',
    //     name: 'contact',
    //     component: require('./user/resources/ContactUs').default
    // }
];
const router = new Router({
    routes,
});

export default router;