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
        path: '/apply',
        name: 'user.apply',
        component: require('./user/dashboard/ApplyNow').default
    },
    {
        path:'/profile',
        name:'user.profile',
        component:require('./user/profile/Profile').default
    },
    {
        path: '/resources',
        name: 'user.resources',
        component: require('./user/resources/Resources').default
    },
    {
        path: '/contactUs',
        name: 'user.contactUs',
        component: require('./user/resources/ContactUs').default
    },
    {
        path: '/welcome',
        name: 'welcome',
        component: require('./user/resources/Welcome').default
    },
    {
        path: '/health-workers',
        name: 'health-workers',
        component: require('./user/resources/HealthWorkers').default
    },

];
const router = new Router({
    routes,
});

export default router;