

require('./bootstrap');

window.Vue = require('vue').default;

import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('course-component', require('./components/AllCourseComponent.vue').default);

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const app = new Vue({
    el: '#app',
});
