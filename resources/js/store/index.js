import Vue from 'vue'
import Vuex from 'vuex'
import auth from "./auth";
import locale from './locale'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
    },
    mutations: {
    },
    actions: {
    },
    getters: {
    },
    modules: {
        auth,
        locale
    }
})
