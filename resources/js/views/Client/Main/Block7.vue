<template>
    <section id="appartments" class="section appartments">
        <div class="container">
            <div class="appartments__header">
                <h2 data-string="apps_title" class="title appartments__title" data-animate="reveal">
                    {{ $t('block7_1') }}</h2>
                <div class="appartments__filter" data-animate="reveal">
                    <template v-if="list.length>0">
                        <div data-string="apps_rooms" class="filter__label">{{ $t('block7_2') }}</div>
                        <div class="filter__options">
                            <label class="filter__option" v-for="option in options" :key="option.id"
                                   @click="filterList(option.id)"
                                   :class="{'checked_filter':selectedIds.includes(option.id)}">
                                <div>{{ option.name }}</div>
                            </label>
                        </div>
                    </template>
                </div>
            </div>
            <div class="appartments__pan swiper"
                 data-animate="reveal" ref="slider">
                <template v-if="filtered.length">
                    <div class="appartments__list swiper-wrapper">
                        <div class="appartment swiper-slide" :data-rooms="item.type" v-for="item in filtered"
                             :key="'flat_'+item.id">
                            <a :href="item.img" class="appartment__preview" data-lightbox>
                                <img :src="item.img" alt="">
                            </a>
                            <div class="appartment__header">
                                <div class="appartment__main">
                                    <div class="appartment__title"><span data-string="apps_1_5r">{{
                                            $t('block7_3', {amount: options.find(x => x.id == item.type).name})
                                        }}</span> •
                                        {{ item.area }}м²
                                    </div>
                                    <div class="appartment__subtitle">{{ item.price }} ₸</div>
                                </div>
                                <a data-string="apps_button"
                                   href="https://api.whatsapp.com/send/?phone=77017776852&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9+%D0%B4%D0%B5%D0%BD%D1%8C%21+%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82+%D0%96%D0%9A+Arena+Sunset&type=phone_number&app_absent=0"
                                   target="_blank" class="button appartment__button">{{ $t('block7_4') }}</a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-scrollbar"></div>
                </template>
            </div>

        </div>
    </section>
</template>

<script>
import ClientRequests from "../../../_api/ClientRequests";
import Swiper, {Scrollbar, FreeMode} from "swiper";


export default {
    name: "Block7",
    components: {
        Swiper, Scrollbar, FreeMode
    },
    data() {
        return {
            options: [
                {
                    id: 1,
                    name: 1
                },
                {
                    id: 2,
                    name: 1.5
                },
                {
                    id: 3,
                    name: 2
                },
                {
                    id: 4,
                    name: 3
                },
                {
                    id: 5,
                    name: 4
                },

            ],
            list: [],
            loading: false,
            selectedIds: [],
            filtered: [],
            readyData: false,
            modules: [Scrollbar, FreeMode],
            swiper_elem: null
        };
    },
    methods: {
        filterList(id) {
            if (this.selectedIds.includes(id))
                this.selectedIds = this.selectedIds.filter(x => x !== id);

            else
                this.selectedIds.push(id);
            if (this.selectedIds.length == 0)
                this.filtered = this.list;
            else
                this.filtered = this.list.filter(x => this.selectedIds.includes(Number(x.type)));
            this.$nextTick(() => {
                // this.swiper_elem.update();
            });

        },
        getList() {
            this.loading = true;
            ClientRequests.listFlats().then(res => {
                this.list = res;
                this.filtered = res;
                this.$nextTick(() => {
                    this.initSwiper();
                });
            });
        },
        initSwiper() {
            new Swiper(this.$refs.slider, {
                modules: [Scrollbar, FreeMode],
                freeMode: {
                    enabled: true,
                    sticky: false,
                },
                grabCursor: true,
                slidesPerView: 'auto',
                scrollbar: {
                    enabled: true,
                    el: '.swiper-scrollbar',
                    draggable: true,
                    hide: false,
                },
                observer: true,
                observeParents: true,
                rebuildOnUpdate: true
            }).init();

            this.readyData = true;
        }
    },
    mounted() {
        this.getList();

    }
};
</script>

<style scoped>
.checked_filter div {
    background: rgba(199, 76, 49, .9) !important;
    color: #fff !important;
}
</style>
