require('./bootstrap');

// Vue
import Vue from 'vue';

// Vue Router
import router from './router';

// Vuex
import store from './store';

// BootstrapVue
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

// Toast
window.toastr = require('toastr');

import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';

// Layouts
Vue.component('LayoutApp', require('./layout/Layout.vue').default);
Vue.component('course-component', require('./components/AllCourseComponent.vue').default);

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const app = new Vue({
  el: '#app',
  router,
  store
});
