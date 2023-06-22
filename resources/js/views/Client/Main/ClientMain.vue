<template>
    <div>
        <header-component :phone="contacts[0]"/>
        <block1 :phone="contacts[0]"/>
        <block2/>
        <block3/>
        <block4 :phone="contacts[0]"/>
        <block5/>
        <block6/>
        <block7/>
        <block8/>
        <block9/>
        <progress-block/>
        <block10 :phone="contacts[0]"/>
        <footer-component/>
    </div>
</template>

<script>
// import '../../assets/styles/main.min.css';
// import './../../assets/js/vendor.min'
import HeaderComponent from "../HeaderComponent";
import FooterComponent from "../FooterComponent";
import Block1 from "./Block1";
import Block2 from "./Block2";
import Block3 from "./Block3";
import Block4 from "./Block4";
import Block5 from "./Block5";
import Block6 from "./Block6";
import Block7 from "./Block7";
import Block8 from "./Block8";
import Block9 from "./Block9";
import Block10 from "./Block10";
import ProgressBlock from "./ProgressBlock";
import clientRequests from "../../../_api/ClientRequests";

export default {
    name: "ClientMain",
    components: {
        Block10,
        Block9,
        Block8,
        Block7,
        Block6,
        Block5,
        Block4,
        Block3,
        Block2,
        Block1,
        HeaderComponent,
        FooterComponent,
        ProgressBlock
    },
    data() {
        return {
            contacts: []
        };

    },
    methods: {
        getItems() {
            clientRequests.getContacts().then(res => {
                this.contacts = res;
            });
        }
    },
    mounted() {
        this.getItems();
    }


};
</script>

<style scoped>

</style>
