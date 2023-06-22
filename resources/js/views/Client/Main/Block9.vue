<template>
    <section id="developer" class="developer container">
        <h2 data-string="dev_title" class="title developer__title" data-animate="reveal">{{ $t('block9_1') }}</h2>
        <div class="developer__text">
            <p data-string="dev_p1" data-animate="reveal">{{ $t('block9_2') }}</p>
            <p data-string="dev_p2" data-animate="reveal">{{ $t('block9_3') }}</p>
        </div>
        <div class="developer__indexes">
            <div class="developer-index" data-animate="reveal">
                <svg class="icon developer-index__icon">
                    <use xlink:href="img/sprites/sprite.svg#Apartment"></use>
                </svg>
                <div class="developer-index__value">12</div>
                <div data-string="dev_i1" class="developer-index__key" v-html="$t('block9_4')"></div>
            </div>
            <div class="developer-index" data-animate="reveal">
                <svg class="icon developer-index__icon">
                    <use xlink:href="img/sprites/sprite.svg#Parliament"></use>
                </svg>
                <div class="developer-index__value">8</div>
                <div data-string="dev_i2" class="developer-index__key" v-html="$t('block9_5')"></div>
            </div>
            <div class="developer-index" data-animate="reveal">
                <svg class="icon developer-index__icon">
                    <use xlink:href="img/sprites/sprite.svg#Factory"></use>
                </svg>
                <div class="developer-index__value">3</div>
                <div data-string="dev_i3" class="developer-index__key" v-html="$t('block9_6')"></div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Block9"
};
</script>

<style scoped>

</style>
