require('./bootstrap');

// importo vue
import vue from 'vue'
window.Vue = vue;

import App from './Components/App.vue';

// Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//importo y configuro Vue-router
import VueRouter from 'vue-router';
import {routes} from './routes';
 
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
 
const router = new VueRouter({
    mode: 'history',
    routes: routes
});
 
//Defino la app de vue
const app = new Vue({
    // viene del dic de app.blase
    el: '#app',
    router: router,
    render: h => h(App)
});