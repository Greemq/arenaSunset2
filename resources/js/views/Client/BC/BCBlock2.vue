<template>
    <section class="bc-section bc-about container" id="about">
        <h2 class="title bc-about__title" data-animate="reveal" data-string="bc_about_1">{{ $t('bc_block2_1') }}</h2>
        <div class="bc-about__wrap">
            <div class="bc-about__main">
                <div class="bc-about__text">
                    <p data-animate="reveal" data-string="bc_about_2">{{ $t('bc_block2_2') }}</p>
                    <p data-animate="reveal" data-string="bc_about_3">{{ $t('bc_block2_3') }}</p>
                </div>
                <div class="bc-about__features">
                    <div class="bc-about__subtitle" data-animate="reveal" data-string="bc_about_4">{{
                            $t('bc_block2_4')
                        }}
                    </div>

                    <div class="bc-about__list">
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/Restaurant.svg" alt="">
                            </div>
                            <span data-string="bc_about_6">{{ $t('bc_block2_5') }}</span>
                        </div>
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/Jacket.svg" alt="">
                            </div>
                            <span data-string="bc_about_7">{{ $t('bc_block2_6') }}</span>
                        </div>
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/Clinic.svg" alt="">
                            </div>
                            <span data-string="bc_about_8">{{ $t('bc_block2_7') }}</span>
                        </div>
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/School.svg" alt="">
                            </div>
                            <span data-string="bc_about_9">{{ $t('bc_block2_8') }}</span>
                        </div>
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/Dumbbell.svg" alt="">
                            </div>
                            <span data-string="bc_about_10">{{ $t('bc_block2_9') }}</span>
                        </div>
                        <div class="bc-about__feature" data-animate="reveal">
                            <div class="icon bc-about__icon">
                                <img src="../../../assets/img/sprites/Barber Chair.svg" alt="">

                            </div>
                            <span data-string="bc_about_11">{{ $t('bc_block2_10') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bc-about__image">
                <img src="../../../assets/img/bc-about.png" data-animate="reveal" alt="">
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "BCBlock2"
};
</script>

<style scoped>

</style>
