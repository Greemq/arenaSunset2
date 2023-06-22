<template>
    <section id="inner" class="inner">
        <h2 class="title inner__title container" data-string="inner_title" data-animate="reveal">{{
                $t('block3_1')
            }} </h2>

        <div class="inner__image">
            <picture>
                <source media="(min-width: 960px)" srcset="../../../assets/img/prospect@2x.webp"/>
                <img src="../../../assets/img/prospect.webp" alt="Внутренняя инфраструктура Arena Sunset"/>
            </picture>
            <div class="inner__point inner__point-2" tabindex="0" data-animate="reveal">
                <div class="inner__point-tooltip" data-string="inner_i2_title">{{ $t('block3_4') }}</div>
            </div>
            <div class="inner__point inner__point-3" tabindex="0" data-animate="reveal">
                <div class="inner__point-tooltip" data-string="inner_i3_title">{{ $t('block3_6') }}</div>
            </div>
            <div class="inner__point inner__point-4" tabindex="0" data-animate="reveal">
                <div class="inner__point-tooltip" data-string="inner_i4_title">{{ $t('block3_8') }}</div>
            </div>
        </div>

        <div class="inner__list container">
            <div class="inner-item">
                <svg class="icon inner-item__icon" data-animate="reveal">
                    <use xlink:href="img/sprites/sprite.svg#Playground"></use>
                </svg>
                <div class="inner-item__wrap">
                    <h3 class="inner-item__title" data-string="inner_i2_title" data-animate="reveal">{{
                            $t('block3_4')
                        }}</h3>
                    <p class="inner-item__text" data-string="inner_i2_text" data-animate="reveal">{{
                            $t('block3_5')
                        }}</p>
                </div>
            </div>
            <div class="inner-item">
                <svg class="icon inner-item__icon" data-animate="reveal">
                    <use xlink:href="img/sprites/sprite.svg#Bench"></use>
                </svg>
                <div class="inner-item__wrap">
                    <h3 class="inner-item__title" data-string="inner_i3_title" data-animate="reveal">{{
                            $t('block3_6')
                        }}</h3>
                    <p class="inner-item__text" data-string="inner_i3_text" data-animate="reveal">{{
                            $t('block3_7')
                        }}</p>
                </div>
            </div>
            <div class="inner-item">
                <svg class="icon inner-item__icon" data-animate="reveal">
                    <use xlink:href="img/sprites/sprite.svg#Secure"></use>
                </svg>
                <div class="inner-item__wrap">
                    <h3 class="inner-item__title" data-string="inner_i4_title" data-animate="reveal">{{
                            $t('block3_8')
                        }}</h3>
                    <p class="inner-item__text" data-string="inner_i4_text" data-animate="reveal">{{
                            $t('block3_9')
                        }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Block3"
};
</script>

<style scoped>

</style>
