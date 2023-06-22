<template>
    <div>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                <div class="mb-4 w-full flex">
                    <label for="search"
                           class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                    <div class="relative" style="min-width: 400px">

                        <input type="text" id="search" v-mask="'8 (7##) ### ## ##'" v-model="phone" :disabled="loading"
                               class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="8 (700) 000 00 00"
                               :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':errors['phone']}">
                        <button @click="createItem" :disabled="loading"
                                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Добавить
                        </button>
                    </div>


                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Основной
                            </th>
                            <th scope="col" class="px-6 py-3 w-1/6">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700" v-for="(item,index) in list"
                            :key="item.id">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ index += 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ item.phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ item.is_main ? 'Да' : 'Нет' }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">

                                    <button type="button" @click="deleteItem(item.id)" :disabled="loading"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-3 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16"
                                             height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                                                fill="white"></path>
                                            <path fill-rule="evenodd"
                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                  fill="white"></path>
                                        </svg>
                                    </button>
                                    <button @click="makeMain(item.id)" type="button"
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Сделать основным
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!--                        <div v-infinite-scroll="handleLoad()"></div>-->
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import UiInput from "./components/UiInput";
import AdminRequests from "../../_api/AdminRequests";

export default {
    name: "Contacts",
    components: {UiInput},
    data() {
        return {
            list: [],
            phone: null,
            loading: false,
            errors: []
        };
    },
    methods: {
        createItem() {
            this.loading = true;
            this.errors = [];
            let form = {phone: this.phone ? this.phone.match(/\d+/g).join("") : null};
            AdminRequests.createContact(form).then(res => {
                this.loading = false;
                this.phone = null;
                this.getList();
            }).catch(err => {
                this.loading = false;
                this.errors = err.response.data.errors;
            });
        },
        getList() {
            this.loading = true;
            AdminRequests.listContacts().then(res => {
                this.list = res;
                this.loading = false;
            });
        },
        deleteItem(id) {
            this.loading = true;
            AdminRequests.deleteContact(id).then(res => {
                this.loading = false;
                this.getList();
            });
        },
        makeMain(id) {
            this.loading = true;
            AdminRequests.makeContactMain(id).then(res => {
                this.getList();
            });
        }
    },
    mounted() {
        this.getList();
    }
};
</script>

<style scoped>

</style>
