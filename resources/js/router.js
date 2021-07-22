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

];
const router = new Router({
    routes,
});

export default router;