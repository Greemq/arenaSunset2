<template>
    <auth-provider>
        <sidebar v-if="$route.name!=='login'"/>
        <router-view :key="$route.name"/>
    </auth-provider>

</template>

<script>

import Sidebar from "./Sidebar";
import AuthProvider from "../../providers/AuthProvider";

export default {
    name: "AdminMain",
    components: {AuthProvider, Sidebar},
    mounted() {
        let flowbite = document.createElement('script');
        flowbite.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js');
        document.head.appendChild(flowbite);
    }
};
</script>

<style>
</style>
