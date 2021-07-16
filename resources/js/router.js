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
    {
        path: '/login',
        name: 'login',
        component: require('./user/resources/Login').default
    },
    {
        path: '/health-workers',
        name: 'health-workers',
        component: require('./user/resources/HealthWorkers').default
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