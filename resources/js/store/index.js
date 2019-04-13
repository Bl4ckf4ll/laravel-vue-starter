import Vue from 'vue';
import Vuex from 'vuex';
import site from './modules/site/main';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    site,
  },
});
