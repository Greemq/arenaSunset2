<template>
    <div>
        <header-component/>
        <b-c-block1/>
        <b-c-block2/>
        <b-c-block3/>
        <b-c-block4/>
        <b-c-block5/>
        <footer-component/>
    </div>
</template>

<script>
import HeaderComponent from "../HeaderComponent";
import FooterComponent from "../FooterComponent";
import BCBlock1 from "./BCBlock1";
import BCBlock2 from "./BCBlock2";
import BCBlock3 from "./BCBlock3";
import BCBlock4 from "./BCBlock4";
import BCBlock5 from "./BCBlock5";

export default {
    name: "BCMain",
    components: {BCBlock1, BCBlock2, BCBlock3, BCBlock4, BCBlock5, FooterComponent, HeaderComponent}
};
</script>

<style scoped>

</style>
