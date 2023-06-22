<template>
    <div>
        <nav-bar @create="createRoute"/>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                AREA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PRICE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TYPE
                            </th>
                            <th scope="col" class="px-6 py-3">
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
                                {{ item.area }}
                            </td>
                            <td class="px-6 py-4">
                                {{ item.price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ item.type }}
                            </td>
                            <td class="px-6 py-4">
                                <router-link :to="{name:'flats_item',params:{id:item.id}}"
                                             class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                </router-link>
                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700" v-if="false">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <div v-infinite-scroll="handleLoad()"></div>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBar from "../components/NavBar";
import AdminRequests from "../../../_api/AdminRequests";

export default {
    name: "FlatsList",
    components: {NavBar},
    data() {
        return {
            list: [],
            page: 0,
            loading: false,
            last_page: null

        };
    },
    methods: {
        createRoute() {
            this.$router.push({name: 'flats_create'});
        },
        getList() {
            this.loading = true;
            this.page += 1;
            AdminRequests.list({page: this.page}).then(res => {
                this.list = this.list.concat(res.data);
                this.last_page = res.last_page;
                this.loading = false;
            }).catch(err => {

            });
        },
        handleLoad() {

            if (!this.loading && this.page !== this.last_page)
                this.getList();
        }
    },
    mounted() {

    }
};
</script>

<style scoped>

</style>
