<template>
    <div class="p-4 sm:ml-64" v-if="form">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="flex flex-row">
                <div class="md:basis-1/2 basis-full">
                    <h3>Дата</h3>

                    <datepicker v-model="form.date" :language="$route.params.locale=='ru'?ru:kk" :disabled="loading"
                                :class="{'datepicker_error':errors['date']}" input-class="datepicker_class"/>

                    <ui-input type="text" v-model="form.translations[0].link" :disabled="loading"
                              :errors="errors['translations.0.link']" label="Код видео youtube"/>

                </div>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex flex-wrap">

                <div class="basis-full md:basis-1/2">
                    <h3>ru</h3>
                    <ui-input type="text" v-model="form.translations[0].description"
                              :error="errors['translations.0.description']"
                              label="Описание"
                              :disabled="loading"/>
                    <!--                    <ui-file-input form-key="ru" v-model="form.translations[0].img" type="flats"-->
                    <!--                                   @uploadFile="setFile($event,0)" :error="errors['translations.0.img']"-->
                    <!--                                   :disabled="loading"/>-->

                </div>
                <div class="basis-full md:basis-1/2">
                    <h3>kk</h3>
                    <ui-input type="text" v-model="form.translations[1].description"
                              :error="errors['translations.1.description']"
                              label="Описание"
                              :disabled="loading"/>
                    <!--                    <ui-file-input form-key="kk" v-model="form.translations[1].img" type="flats"-->
                    <!--                                   @uploadFile="setFile($event,1)" :error="errors['translations.1.img']"-->
                    <!--                                   :disabled="loading"/>-->

                </div>
            </div>
            <div class="my-3">
                <success-button @click="$route.name=='progress_create'?saveForm():updateForm()" :disabled="loading"/>
            </div>


        </div>
    </div>
</template>

<script>
import UiFileInput from "../components/UiFileInput";
import SuccessButton from "../components/SuccessButton";
import UiInput from "../components/UiInput";
import Datepicker from 'vuejs-datepicker';
import {ru, kk} from 'vuejs-datepicker/dist/locale';
import AdminRequests from "../../../_api/AdminRequests";
import dayjs from "dayjs";

export default {
    name: "ProgressForm",
    components: {UiInput, SuccessButton, UiFileInput, Datepicker},
    data() {
        return {
            form: null,
            errors: [],
            loading: false,
            ru: ru,
            kk: kk
        };
    },
    computed: {
        newForm() {
            return {
                date: null,
                translations: {
                    0: {img: null, locale: 'ru', description: null, link: null},
                    1: {img: null, locale: 'kk', description: null, link: null},
                },

            };
        },

    },
    methods: {
        setFile(file, type = null) {
            this.form.translations[type].img = file;
        },
        saveForm() {
            this.loading = true;
            this.errors = [];
            let tmp = {
                date: dayjs(this.form.date).format('YYYY-MM-DD'),
                translations: this.form.translations
            };
            AdminRequests.createProgress(tmp).then(res => {
                this.$router.push({name: 'progress_item', params: {id: res.id}});
                this.loading = false;
            }).catch(err => {
                this.errors = err.response.data.errors;
                this.loading = false;
            });
        },
        updateForm() {
            this.loading = true;
            this.errors = [];
            let tmp = {
                date: dayjs(this.form.date).format('YYYY-MM-DD'),
                translations: this.form.translations
            };
            AdminRequests.updateProgress(this.$route.params.id, tmp).then(res => {
                this.loading = false;
            }).catch(err => {
                this.errors = err.response.data.errors;
                this.loading = false;
            });
        },
        getItem() {
            AdminRequests.showProgress(this.$route.params.id).then(res => {
                this.form = res;
            });
        }
    },
    mounted() {

        if (this.$route.name == 'progress_item') {
            this.getItem();
        } else {
            this.form = JSON.parse(JSON.stringify(this.newForm));
        }
    }
};
</script>

<style>
.datepicker_class {
    border-radius: 5px;
}

.datepicker_error div input {
    border-color: red !important;
    background-color: #fdf2f2 !important;
}

</style>
