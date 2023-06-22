import store from "./../store";
import i18nService from "../_services/i18n.service";

export const requireAuth = (to, from, next) => {

    if (store.state.auth.authorized) {
        next();
    } else {
        next({name: 'login', query: {from: to.name}});
    }
    // else {
    //     // next({name: '404', query: {from: to.name}});
    //     next({name: 'login', query: {from: to.name}});
    // }
};

export const checkLocale = (to, from, next) => {
    if (i18nService.isLocaleValid(to.params.locale)) {
        next();
    } else {
        next({...to, params: {...to.params, locale: i18nService.getCurrentLocale()}});
    }
};
