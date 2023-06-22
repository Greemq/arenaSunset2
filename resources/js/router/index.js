import Vue from 'vue';
import Router from 'vue-router';
import Localizer from '../providers/LocalizationProvider';
import i18nService from "../_services/i18n.service";
import {checkLocale} from "./router-guards";
import routes from "./routes";

Vue.use(Router);
const router = new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            redirect: `/${i18nService.getCurrentLocale()}`,
        },
        {
            path: '/:locale',
            name: 'base_path',
            component: Localizer,
            beforeEnter: checkLocale,
            children: [...routes]
        },
    ]
});


const DEFAULT_TITLE = 'temp';

router.afterEach((to, from, next) => {
    Vue.nextTick(() => {
        document.title = "temp" || DEFAULT_TITLE;
        if (to.meta.title)
            document.title = Vue.prototype.$t(to.meta.title);
    });

    next;
});

export default router;
