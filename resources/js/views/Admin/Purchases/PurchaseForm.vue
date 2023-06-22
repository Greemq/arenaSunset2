<template>
    <div class="p-4 sm:ml-64" v-if="form">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

            <div class="flex flex-wrap">

                <div class="basis-full md:basis-1/2">
                    <h3>ru</h3>
                    <ui-input type="text" v-model="form.translations[0].title"
                              :error="errors['translations.0.title']"
                              label="Заголовок"
                              :disabled="loading"/>
                    <ui-textarea v-model="form.translations[0].description"
                                 :error="errors['translations.0.description']"
                                 label="Описание"
                                 :disabled="loading"/>

                    <ui-input type="text" v-model="form.translations[0].btn_text"
                              :error="errors['translations.0.btn_text']"
                              label="Текст Кнопки"
                              :disabled="loading"/>

                </div>
                <div class="basis-full md:basis-1/2">
                    <h3>kk</h3>
                    <ui-input type="text" v-model="form.translations[1].title"
                              :error="errors['translations.1.title']"
                              label="Заголовок"
                              :disabled="loading"/>
                    <ui-textarea v-model="form.translations[1].description"
                                 :error="errors['translations.1.description']"
                                 label="Описание"
                                 :disabled="loading"/>

                    <ui-input type="text" v-model="form.translations[1].btn_text"
                              :error="errors['translations.1.btn_text']"
                              label="Текст Кнопки"
                              :disabled="loading"/>

                </div>
            </div>
            <div class="my-3">
                <success-button
                    @click="['purchase_create_1','purchase_create_2'].includes($route.name)?saveForm():updateForm()"
                    :disabled="loading"/>
            </div>


        </div>
    </div>
</template>

<script>
import UiFileInput from "../components/UiFileInput";
import SuccessButton from "../components/SuccessButton";
import UiInput from "../components/UiInput";
import AdminRequests from "../../../_api/AdminRequests";
import UiTextarea from "../components/UiTextarea";

export default {
    name: "PurchaseForm",
    components: {UiTextarea, UiInput, SuccessButton, UiFileInput},
    data() {
        return {
            form: null,
            errors: [],
            loading: false,
        };
    },
    computed: {
        newForm() {
            return {
                translations: {
                    0: {locale: 'ru', description: null, title: null, btn_text: null},
                    1: {locale: 'kk', description: null, title: null, btn_text: null},

                },

            };
        },
        getType() {
            return this.$route.name == 'purchase_create_1' ? 1 : 2;
        }

    },
    methods: {
        setFile(file, type = null) {
            this.form.translations[type].img = file;
        },
        saveForm() {
            this.loading = true;
            this.errors = [];
            let tmp = {
                type: this.getType,
                translations: this.form.translations
            };
            AdminRequests.createPurchases(tmp).then(res => {
                this.$router.push({
                    name: this.getType == 1 ? 'purchase_item_1' : 'purchase_item_2',
                    params: {id: res.id}
                });
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
                translations: this.form.translations
            };
            AdminRequests.updatePurchases(this.$route.params.id, tmp).then(res => {
                this.loading = false;
            }).catch(err => {
                this.errors = err.response.data.errors;
                this.loading = false;
            });
        },
        getItem() {
            AdminRequests.showPurchase(this.$route.params.id).then(res => {
                this.form = res;
            });
        }
    },
    mounted() {

        if (['purchase_item_1', 'purchase_item_2'].includes(this.$route.name)) {

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
