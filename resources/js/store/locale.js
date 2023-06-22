const state = {
    locale: 'ru'
};

const getters = {
    getLocale(state) {
        return state.locale;
    },
};
const mutations = {
    setLocale(state, payload) {
        state.locale = payload;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    mutations
};
