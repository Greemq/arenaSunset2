<template>
    <section id="purchase" class="section purchase container">
        <h2 data-string="purchase_title" class="title purchase__title" data-animate="reveal">{{ $t('block8_1') }}</h2>
        <div class="purchase__list">
            <template v-if="list.length>0">
                <div class="purchase-item" data-animate="reveal" v-for="item in list" :key="'purchase_'+item.id">
                    <h3 data-string="purchase_i1_title" class="purchase-item__title" data-animate="reveal">{{
                            item.title
                        }}</h3>
                    <p data-string="purchase_i1_text" class="purchase-item__text" data-animate="reveal">{{
                            item.description
                        }}</p>
                    <a data-string="purchase_i1_button"
                       href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%96%D0%9A+Arena+Sunset&type=phone_number&app_absent=0"
                       target="_blank" class="button purchase-item__button">{{ item.btn_text }}</a>
                </div>
            </template>
            <div class="purchase-item purchase-item--accent" data-animate="reveal">
                <h3 data-string="purchase_i3_title" class="purchase-item__title"
                    data-animate="reveal">{{ $t('block8_8') }}</h3>
                <p data-string="purchase_i3_text" class="purchase-item__text"
                   data-animate="reveal">{{ $t('block8_9') }}</p>
                <a data-string="purchase_i3_button"
                   href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%96%D0%9A+Arena+Sunset&type=phone_number&app_absent=0"
                   target="_blank" class="button button--inverse purchase-item__button">{{ $t('block8_10') }}</a>
            </div>
        </div>
    </section>
</template>

<script>
import ClientRequests from "../../../_api/ClientRequests";

export default {
    name: "Block8",
    data() {
        return {
            list: []
        };
    },
    methods: {
        getList() {
            ClientRequests.listPurchases({type: 1}).then(res => {
                this.list = res;
            });
        },

    },
    mounted() {
        this.getList();
    }
};
</script>

<style scoped>

</style>
