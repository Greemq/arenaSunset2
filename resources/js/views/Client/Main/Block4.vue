<template>
    <section class="cta container" data-animate="reveal">
        <div class="cta__wrap">
            <div class="cta__background"></div>
            <div class="cta__main">
                <!-- <input data-string="form_placeholder" type="tel" minlength="11" class="input" placeholder="Номер телефона" required> -->
                <a v-if="phone" :href="'https://api.whatsapp.com/send/?phone='+phone.phone.match(/\d+/g).join('')+'&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%96%D0%9A+Arena+Sunset&type=phone_number&app_absent=0'"
                   target="_blank" data-string="form_button" class="button">{{$t('block4_1')}}</a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "block4",
    props:['phone']
};
</script>

<style scoped>

</style>
