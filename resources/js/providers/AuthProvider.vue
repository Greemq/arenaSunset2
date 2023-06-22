<template>
    <div>
        <slot v-if="ready"/>
    </div>
</template>

<script>
import {setTokenToClient} from "../_api";
import authApi from "../_api/Auth";

export default {
    name: "AuthProvider",
    data() {
        return {
            ready: false
        };
    },
    methods: {
        getToken() {
            setTokenToClient(authApi.getToken());
            this.ready = true;
        },
    },
    computed: {
        authorised() {
            return this.$store.state.auth.authorized;
        },
    },
    mounted() {
        if (this.authorised)
            this.getToken();
        else
            this.ready = true;
    }
};
</script>

<style scoped>

</style>
