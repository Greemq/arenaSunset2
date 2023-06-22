<template>
    <section id="about" class="section about container">
        <div class="about__col-1">
            <h2 class="about__title title" data-string="about_title" data-animate="reveal">{{$t('block2_1')}}</h2>

            <img src="../../../assets/img/about-1.webp" alt="" data-animate="reveal">

            <div class="about__indicators">
                <div class="about__indicator indicator" data-animate="reveal">
                    <div class="indicator__value" data-string="about_i1_value">{{$t('block2_4')}}</div>
                    <div class="indicator__key" data-string="about_i1_key">{{ $t('block2_5') }}</div>
                </div>
                <div class="about__indicator indicator" data-animate="reveal">
                    <div class="indicator__value" data-string="about_i2_value">{{ $t('block2_6') }}</div>
                    <div class="indicator__key" data-string="about_i2_key">{{ $t('block2_7') }}</div>
                </div>
            </div>
        </div>

        <div class="about__col-2">
            <p data-string="about_p1" data-animate="reveal">{{$t('block2_2')}}</p>

            <img src="../../../assets/img/about-2.webp" alt="" data-animate="reveal">

            <p data-string="about_p2" data-animate="reveal">{{$t('block2_3')}}</p>

            <!-- <a href="#" target="_blank" class="about__link" data-animate="reveal">
                <span data-string="about_link">О бизнес-центре</span>
                <svg class="icon">
                    <use xlink:href="img/sprites/sprite.svg#External_Link"></use>
                </svg>
            </a> -->
        </div>
    </section>
</template>

<script>
export default {
    name: "Block2"
};
</script>

<style scoped>

</style>
