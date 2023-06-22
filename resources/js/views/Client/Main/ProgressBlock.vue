<template>
    <section id="progress" class="section progress">
        <div class="container">
            <h2 data-string="progress_title" class="title progress__title" data-animate="reveal">Смотрите, как строится
                ваша
                мечта</h2>
            <div class="timeline progress__timeline" data-animate="reveal">
                <span class="timeline__bar" style="width: 50%;"></span>
                <div tabindex="0" class="timeline__point" :class="{'timeline__point--inactive':!dot.link}" v-for="dot in list" :key="'dot_'+dot.id">
                    <div class="timeline__tooltip tooltip">
                        <div class="tooltip__title">{{ dayjs(dot.date).format('MMM YYYY') }}</div>
                        <div class="tooltip__text">{{ dot.description }}</div>
                    </div>
                </div>

            </div>

            <div class="progress__pan swiper" data-animate="reveal">
                <div class="swiper-wrapper progress__slider" v-if="list_images.length>0">
                    <a :href="'https://www.youtube.com/watch?v='+item.link" target="_blank" class="progress-item swiper-slide"
                       v-for="item in list_images" :key="'img_'+item.id"
                       data-lightbox>
                        <div class="progress-item__preview">
                            <img :src="item.img?item.img:'https://img.youtube.com/vi/'+item.link+'/hqdefault.jpg'" alt="">
                            <button class="progress-item__play"></button>
                        </div>
                        <h3 class="progress-item__title">{{ dayjs(item.date).format('MMM, YYYY') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import AdminRequests from "../../../_api/AdminRequests";
import clientRequests from "../../../_api/ClientRequests";
import dayjs from "dayjs";
import 'dayjs/locale/ru';
import 'dayjs/locale/kk';
import localeData from 'dayjs/plugin/localeData';

export default {
    name: "Progress",
    data() {
        return {
            list: [],
            list_images: []
        };
    },
    methods: {
        dayjs,
        getList() {
            clientRequests.listProgress().then(res => {
                this.list = res;
                this.list_images = this.list.filter(x => x.link != null);
            });
        }
    },
    mounted() {
        this.getList();
        dayjs.extend(localeData);
        dayjs.locale(this.$route.params.locale);
    }
};
</script>

<style scoped>

</style>
