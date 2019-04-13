import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate'
import site from './modules/site/main';

Vue.use(Vuex);

export default new Vuex.Store({
  plugins: [
    createPersistedState(),
  ],
  modules: {
    site,
  },
});
