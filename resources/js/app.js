require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('base-component', require('./App.vue').default);
import './plugins';
import router from './router/index';
import store from './store/index';
import infiniteScroll from 'vue-infinite-scroll';


Vue.use(infiniteScroll);

const app = new Vue({
    el: '#app',
    router,
    store

});

