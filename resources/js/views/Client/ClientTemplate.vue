<template>
    <router-view/>
</template>

<script>
export default {
    name: "ClientTemplate",
    created() {
        let or = window.location.origin;
        const script1 = document.createElement("script");
        script1.setAttribute(
            "src",
            or + "/js/main.min.js"
        );
        document.head.appendChild(script1);
        const script2 = document.createElement("script");
        script2.setAttribute(
            "src",
            or + "/js/vendor.min.js"
        );
        document.head.appendChild(script2);
        // const map = document.createElement("script");
        // map.setAttribute(
        //     "src",
        //     "https://maps.googleapis.com/maps/api/js?key=AIzaSyAf9UP6bU2Q-8tFyKZW5ag8GmFHt-HtSiU&callback=initMap&v=weekly"
        // );
        // document.head.appendChild(map);
    }
};
</script>

<style scoped>

</style>
