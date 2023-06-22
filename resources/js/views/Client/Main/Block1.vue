<template>
    <section class="hero">
        <div class="hero__wrap" id="hero">
            <div class="hero__descriptor" data-animate="reveal">Arena Sunset</div>
            <h1 class="hero__title" data-string="hero_title" data-animate="reveal">{{
                    $t('block1_1')
                }}</h1>
            <p class="hero__description" data-string="hero_text" data-animate="reveal">{{
                    $t('block1_2')
                }}</p>
            <a v-if="phone"
               :href="'https://api.whatsapp.com/send/?phone='+phone.phone.match(/\d+/g).join('')+'&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%96%D0%9A+Arena+Sunset&type=phone_number&app_absent=0'"
               target="_blank" data-string="hero_button" class="button hero__button"
               data-animate="reveal">{{ $t('block1_3') }}</a>
        </div>

        <div class="hero__indicators">
            <div class="indicator indicator--inverse hero__indicator" data-animate="reveal">
                <div class="indicator__value" data-string="hero_i1_value">{{ $t('block1_3') }}</div>
                <div class="indicator__key" data-string="hero_i1_key">{{ $t('block1_4') }}</div>
            </div>

            <div class="indicator indicator--inverse hero__indicator" data-animate="reveal">
                <div class="indicator__value" data-string="hero_i2_value">{{ $t('block1_5') }}</div>
                <div class="indicator__key" data-string="hero_i2_key">{{ $t('block1_6') }}</div>
            </div>
        </div>

        <div class="hero__bg-clouds"></div>
        <div class="hero__bg-front"></div>
    </section>
</template>

<script>
export default {
    name: "Block1",
    props: ['phone']
};
</script>

<style scoped>

</style>
