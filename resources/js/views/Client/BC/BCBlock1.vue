<template>
    <section class="bc-hero" id="hero">
        <div class="bc-hero__wrap" id="hero">
            <div class="bc-hero__descriptor" data-string="bc_hero_descriptor">{{ $t('bc_block1_1') }}</div>
            <h1 class="bc-hero__title" data-string="bc_hero_title">{{ $t('bc_block1_2') }}</h1>
            <p class="bc-hero__description" data-string="bc_hero_text">{{ $t('bc_block1_3') }}</p>
            <a href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%91%D0%A6+Arena+Sunset&type=phone_number&app_absent=0"
               target="_blank" class="button bc-hero__button" data-string="bc_hero_button">{{ $t('bc_block1_4') }}</a>
        </div>
        <ul class="bc-hero__features">
            <li data-string="bc_hero_feature_1">{{ $t('bc_block1_5') }}</li>
            <li data-string="bc_hero_feature_2">{{ $t('bc_block1_6') }}</li>
            <li data-string="bc_hero_feature_3">{{ $t('bc_block1_7') }}</li>
            <li data-string="bc_hero_feature_4">{{ $t('bc_block1_8') }}</li>
        </ul>
    </section>
</template>

<script>
export default {
    name: "BCBlock1"
};
</script>

<style scoped>

</style>
