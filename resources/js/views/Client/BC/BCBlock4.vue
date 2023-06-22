<template>
    <section class="bc-section bc-purchase container" id="purchase">
        <h2 class="title bc-purchase__title" data-animate="reveal" data-string="bc_purchase_1">{{
                $t('bc_block4_1')
            }}</h2>
        <p class="bc-purchase__text" data-animate="reveal" data-string="bc_purchase_2">{{ $t('bc_block4_2') }}</p>

        <div class="bc-purchase__list">
            <template v-if="list.length>0">
                <div class="bc-purchase-item" data-animate="reveal" data-string="bc_purchase_3" v-for="item in list"
                     :key="'purchase_'+item.id">
                    <h3 class="bc-purchase-item__title" data-animate="reveal" data-string="bc_purchase_4">
                        {{ item.title }}</h3>
                    <p class="bc-purchase-item__text" data-animate="reveal" data-string="bc_purchase_5">{{
                            item.description
                        }}</p>
                    <a href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%91%D0%A6+Arena+Sunset&type=phone_number&app_absent=0"
                       target="_blank" class="button bc-purchase-item__button"
                       data-string="bc_purchase_6">{{ item.btn_text }}</a>
                </div>
            </template>
            <div class="bc-purchase-item bc-purchase-item--accent" data-animate="reveal">
                <h3 class="bc-purchase-item__title" data-animate="reveal" data-string="bc_purchase_10">
                    {{ $t('bc_block4_10') }}</h3>
                <p class="bc-purchase-item__text" data-animate="reveal" data-string="bc_purchase_11">
                    {{ $t('bc_block4_11') }}</p>
                <a href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%91%D0%A6+Arena+Sunset&type=phone_number&app_absent=0"
                   target="_blank" class="button button--inverse bc-purchase-item__button" data-string="bc_purchase_12">{{
                        $t('bc_block4_12')
                    }}</a>
            </div>
        </div>
    </section>
</template>

<script>
import ClientRequests from "../../../_api/ClientRequests";

export default {
    name: "BCBlock4",
    data() {
        return {
            list: []
        };
    },
    methods: {
        getList() {
            ClientRequests.listPurchases({type: 2}).then(res => {
                this.list = res;
            });
        }
    },
    mounted() {
        this.getList();
    }
};
</script>

<style scoped>

</style>
