import Vue from "vue";
import vuexI18n from "vuex-i18n";
import {locales} from "../_configs/i18n";
import i18nService from "../_services/i18n.service";
import store from "../store";

import * as VueGoogleMaps from 'vue2-google-maps';

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyBcBC4wI6cHEoZiDmlvxzz9ULzsn8cPNyM',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)

        //// If you want to set the version, you can do so:
        // v: '3.26',
        language:'ru',
        region:'KZ'
    },
});
import VueMask from 'v-mask';
import { VueMaskDirective } from "v-mask";
Vue.use(VueMask);
Vue.directive('mask', VueMaskDirective);

Vue.use(vuexI18n.plugin, store);

locales.forEach(locale => {
    Vue.i18n.add(locale.code, locale.dictionary);
});
Vue.i18n.set(i18nService.getCurrentLocale());



