<template>
    <footer class="footer">
        <div class="container footer__wrap">
            <div class="footer__main">
                <div data-string="footer_copyright" class="footer__copy" data-animate="reveal">{{ $t('footer_1') }}
                </div>
                <div class="footer__social" data-animate="reveal">
                    <a href="#" target="_blank">
                        <svg class="icon">
                            <use xlink:href="img/sprites/sprite.svg#Instagram"></use>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=77017776852" target="_blank">
                        <svg class="icon">
                            <use xlink:href="img/sprites/sprite.svg#WhatsApp"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div data-string="footer_disclaimer" class="footer__disclaimer" data-animate="reveal">{{$t('footer_2')}}</div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "FooterComponent"
};
</script>

<style scoped>

</style>
