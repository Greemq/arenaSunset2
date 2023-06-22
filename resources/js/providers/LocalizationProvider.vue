<template>
    <div v-if="currentLocale">
        <router-view :key="currentLocale"/>
    </div>
</template>

<script>
import {checkLocale} from "../router/router-guards";
import i18nService from "../_services/i18n.service";

export default {
    computed: {
        currentLocale() {
            return this.$route.params.locale;
        },
    },
    watch: {
        // $route(to, from) {
        //     if (to.params.locale !== from.params.locale) {
        //         this.setLocale(to.params.locale);
        //         window.location.reload();
        //     }
        // },
        // $route:{
        //     handler:function(to,from){
        //         if (to.params.locale!==from.params.locale){
        //             this.setLocale(to.params.locale)
        //             // window.location.reload()
        //         }
        //     },deep:true
        // }

    },
    mounted() {
        // this.setLocale(this.$route.params.locale);
    },
    methods: {
        setLocale(locale) {
            i18nService.setCurrentLocale(locale);
            this.$nextTick(() => {
                this.$router.replace({name: this.$route.name, params: {locale: locale}});
            });

            // window.location.reload()
        }
    },
    beforeRouteUpdate: checkLocale
};
</script>
