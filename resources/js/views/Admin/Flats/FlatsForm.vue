<template>
    <div class="p-4 sm:ml-64" v-if="form">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="flex flex-row">
                <div class="md:basis-1/2 basis-full">
                    <ui-input type="number" v-model="form.area" :error="errors['area']" label="area"
                              :disabled="loading"/>
                    <ui-input type="number" v-model="form.price" :error="errors['price']" label="price"
                              :disabled="loading"/>
                    <ui-select :options="typeOptions" v-model="form.type" :error="errors['type']"/>
                </div>
            </div>
            <div class="flex flex-wrap">

                <div class="basis-full md:basis-1/2">
                    <h3>ru</h3>
                    <ui-file-input form-key="ru" v-model="form.translations[0].img" type="flats"
                                   @uploadFile="setFile($event,0)" :error="errors['translations.0.img']"
                                   :disabled="loading"/>


                </div>
                <div class="basis-full md:basis-1/2">
                    <h3>kk</h3>
                    <ui-file-input form-key="kk" v-model="form.translations[1].img" type="flats"
                                   @uploadFile="setFile($event,1)" :error="errors['translations.1.img']"
                                   :disabled="loading"/>
                    <!--                    <ui-input/>-->
                </div>
            </div>
            <div>
                <success-button @click="saveForm" :disabled="loading"/>
            </div>

        </div>
    </div>
</template>

<script>
import UiInput from "../components/UiInput";
import UiFileInput from "../components/UiFileInput";
import UiSelect from "../components/UiSelect";
import SuccessButton from "../components/SuccessButton";
import AdminRequests from "../../../_api/AdminRequests";

export default {
    name: "FlatsForm",
    components: {SuccessButton, UiSelect, UiFileInput, UiInput},
    data() {
        return {
            form: null,
            errors: [],
            loading: false
        };
    },
    computed: {
        newForm() {
            return {
                price: null,
                area: null,
                type: null,
                translations: {
                    0: {img: null, locale: 'ru'},
                    1: {img: null, locale: 'kk'},
                }
            };
        },
        typeOptions() {
            return [
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
            ];
        }
    },
    methods: {
        setFile(file, type = null) {
            this.form.translations[type].img = file;
        },
        saveForm() {
            this.errors = [];
            this.loading = true;
            AdminRequests.create(this.form).then(res => {
                this.loading = false;
            }).catch(err => {
                this.errors = err.response.data.errors;
                this.loading = false;

            });
        },
        updateForm(){

        },
        getItem() {
            this.loading = true;
            AdminRequests.show(this.$route.params.id).then(res => {
                this.form = res;
                this.loading = false;
            });
        }
    },
    mounted() {

        if (this.$route.params.id) {
            this.getItem();
        } else {
            this.form = JSON.parse(JSON.stringify(this.newForm));

        }
    }
};
</script>

<style scoped>

</style>
