<template>
    <section class="bc-section bc-features container" id="features">
        <div class="bc-features__image">
            <img src="../../../assets/img/bc-features.png" data-animate="reveal" alt="">
        </div>
        <div class="bc-features__list">
            <div class="bc-features__item" data-animate="reveal">
                <svg class="icon bc-features__icon">
                    <use xlink:href="img/sprites/sprite.svg#User_Groups"></use>
                </svg>
                <div class="bc-features__item-wrap">
                    <div class="bc-features__subtitle" data-string="bc_features_1">{{ $t('bc_block3_1') }}</div>
                    <div class="bc-features__text" data-string="bc_features_2">{{ $t('bc_block3_2') }}</div>
                </div>
            </div>
            <div class="bc-features__item" data-animate="reveal">
                <svg class="icon bc-features__icon">
                    <use xlink:href="img/sprites/sprite.svg#Select_None"></use>
                </svg>
                <div class="bc-features__item-wrap">
                    <div class="bc-features__subtitle" data-string="bc_features_3">{{ $t('bc_block3_3') }}</div>
                    <div class="bc-features__text" data-string="bc_features_4">{{ $t('bc_block3_4') }}</div>
                </div>
            </div>
            <div class="bc-features__item" data-animate="reveal">
                <svg class="icon bc-features__icon">
                    <use xlink:href="img/sprites/sprite.svg#Grid_2"></use>
                </svg>
                <div class="bc-features__item-wrap">
                    <div class="bc-features__subtitle" data-string="bc_features_5">{{ $t('bc_block3_5') }}</div>
                    <div class="bc-features__text" data-string="bc_features_6">{{ $t('bc_block3_6') }}</div>
                </div>
            </div>
            <div class="bc-features__item" data-animate="reveal">
                <svg class="icon bc-features__icon">
                    <use xlink:href="img/sprites/sprite.svg#Air_Quality"></use>
                </svg>
                <div class="bc-features__item-wrap">
                    <div class="bc-features__subtitle" data-string="bc_features_7">{{ $t('bc_block3_7') }}</div>
                    <div class="bc-features__text" data-string="bc_features_8">{{ $t('bc_block3_8') }}</div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "BCBlock3"
};
</script>

<style scoped>

</style>
