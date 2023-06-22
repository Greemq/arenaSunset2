<template>
    <header class="header">
        <div class="header__wrap container">
            <div class="menu-wrap" :class="{enabled:isVisible}">
                <button class="header__button header__button--menu" @click="handleMenuClick">
                    <div class="menu-icon">
                        <div class="menu-icon__bar"></div>
                        <div class="menu-icon__bar"></div>
                        <div class="menu-icon__bar"></div>
                    </div>
                    <span data-string="menu">Меню</span>
                </button>
                <div class="menu">
                    <a :data-string="item.string" :href="'#'+item.path" class="menu__item"
                       v-for="item in list" @click="isVisible=false">{{ item.name }}</a>
                    <a style="cursor:pointer;" data-string="menu_10" class="menu__item" v-if="$route.name=='main_page'"
                       @click.prevent="$router.push({name:'bc'})">{{ $t('menu_10') }}</a>
                    <a style="cursor:pointer;" data-string="menu_14" class="menu__item" v-if="$route.name=='bc'"
                       @click.prevent="$router.push({name:'main_page'})">{{ $t('menu_14') }}</a>
                </div>
            </div>

            <div class="header__group">
                <button class="header__button" data-change-lng="kz" data-locale="ru"
                        @click="setLocale($route.params.locale=='ru'?'kk':'ru')">
                    <img class="icon icon_local" src="../../assets/img/sprites/sprite.svg#Globe"
                         style="filter:invert(1)"/>

                    {{ $route.params.locale == 'ru' ? 'Рус' : 'Қаз' }}
                </button>

                <template v-if="phone">
                    <a :href="'tel:'+phone.phone.match(/\d+/g).join('')" class="header__button" data-locale="ru"
                    >
                        <img class="icon icon_local" src="../../assets/img/sprites/sprite.svg#Phone"
                             style="filter:invert(1)"/>
                        {{ phone.phone }}
                    </a>
                </template>

            </div>
        </div>
    </header>
</template>

<script>
import i18nService from "../../_services/i18n.service";

export default {
    name: "HeaderComponent",
    props: ['phone'],
    data() {
        return {
            isVisible: false,
            main_page: [
                {
                    path: 'hero',
                    name: 'Arena Sunset',
                    string: 'menu_01'
                }, {
                    path: 'about',
                    name: this.$t('menu_02'),
                    string: 'menu_02'
                }, {
                    path: 'inner',
                    name: this.$t('menu_03'),
                    string: 'menu_03'
                }, {
                    path: 'features',
                    name: this.$t('menu_04'),
                    string: 'menu_04'
                }, {
                    path: 'outer',
                    name: this.$t('menu_05'),
                    string: 'menu_05'
                }, {
                    path: 'appartments',
                    name: this.$t('menu_06'),
                    string: 'menu_06'
                }, {
                    path: 'purchase',
                    name: this.$t('menu_07'),
                    string: 'menu_07'
                }, {
                    path: 'developer',
                    name: this.$t('menu_08'),
                    string: 'menu_08'
                }, {
                    path: 'progress',
                    name: this.$t('menu_09'),
                    string: 'menu_09'
                },

            ],
            bc_page: [
                {
                    path: 'hero',
                    name: 'Arena Sunset',
                    string: 'menu_11'
                }, {
                    path: 'about',
                    name: this.$t('menu_04'),
                    string: 'menu_04'
                }, {
                    path: 'inner',
                    name: this.$t('menu_12'),
                    string: 'menu_12'
                }, {
                    path: 'features',
                    name: this.$t('menu_13'),
                    string: 'menu_13'
                },
            ],
            list: []
        };
    },
    methods: {
        handleMenuClick() {
            this.isVisible = !this.isVisible;
        },
        setLocale(locale) {

            i18nService.setCurrentLocale(locale);
            this.$router.push({
                name: this.$route.name,
                params: {locale: locale},
            });
        },
    },
    mounted() {
        this.list = this.$route.name == 'main_page' ? this.main_page : this.bc_page;
    },
};
</script>

<style>
.icon_local {
    filter: invert(1) !important;
}
</style>
