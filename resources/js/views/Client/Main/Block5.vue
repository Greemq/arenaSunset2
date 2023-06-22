<template>
<section id="features" class="section features">
            <div class="container">
                <div class="features__header">
                    <h2 data-string="features_title" class="title features__title" data-animate="reveal">{{
                            $t('block5_1')
                        }}</h2>
                    <p data-string="features_text" class="features__description" data-animate="reveal">{{$t('block5_2')}}</p>
                </div>

                <div class="features__grid">
                    <div class="features-item">
                        <div class="features-item__image">
                            <img src="img/features/1.webp" alt="" data-animate="reveal">
                        </div>
                        <div class="features-item__text">
                            <h3 data-string="features_i1_title" class="features-item__title" data-animate="reveal">{{$t('block5_3')}}</h3>
                            <p data-string="features_i1_text" data-animate="reveal">{{$t('block5_4')}}</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-item__image">
                            <img src="img/features/2.webp" alt="" data-animate="reveal">
                        </div>
                        <div class="features-item__text">
                            <h3 data-string="features_i2_title" class="features-item__title" data-animate="reveal">{{$t('block5_5')}}</h3>
                            <p data-string="features_i2_text" data-animate="reveal">{{$t('block5_6')}}</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-item__image">
                            <img src="img/features/3.webp" alt="" data-animate="reveal">
                        </div>
                        <div class="features-item__text">
                            <h3 data-string="features_i3_title" class="features-item__title" data-animate="reveal">{{$t('block5_7')}}</h3>
                            <p data-string="features_i3_text" data-animate="reveal">{{$t('block5_8')}}</p>
                        </div>
                    </div>
                    <div class="features-item">
                        <div class="features-item__image">
                            <img src="img/features/4.webp" alt="" data-animate="reveal">
                        </div>
                        <div class="features-item__text">
                            <h3 data-string="features_i4_title" class="features-item__title" data-animate="reveal">{{$t('block5_9')}}</h3>
                            <p data-string="features_i4_text" data-animate="reveal">{{$t('block5_10')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>
export default {
    name: "Block5"
};
</script>

<style scoped>

</style>
