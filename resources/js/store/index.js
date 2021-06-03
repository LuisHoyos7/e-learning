import Vue from 'vue';
import Vuex from 'vuex';
import auth from './modules/auth';
import groups from './modules/groups';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth,
    groups
  }
});
