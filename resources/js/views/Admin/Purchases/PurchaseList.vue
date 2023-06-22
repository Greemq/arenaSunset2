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
                                Title
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
                                {{ item.title }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <router-link
                                        :to="{name:$route.name=='purchase_list_1'?'purchase_item_1':'purchase_item_2',params:{id:item.id}}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-4">Edit
                                    </router-link>

                                    <div class="ml-3" style="min-width: 20px">
                                        <i class="arrow down" @click="clickOrder(item.id,'down')"
                                           v-if="index!==list.length"></i>
                                    </div>
                                    <div class="ml-3">
                                        <i class="arrow up" @click="clickOrder(item.id,'up')" v-if="index>1"></i>
                                    </div>


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
    watch: {
        $route(to, from) {
            if (to.name !== from.name) {
                this.handleLoad();
                this.list = [];
            }
        },
    },
    methods: {
        clickOrder(id, direction) {
            if (!this.loading) {
                let type = this.$route.name == 'purchase_list_1' ? 1 : 2;
                AdminRequests.purchaseOrder(id, {direction: direction, type: type}).then(res => {
                    this.getList();
                });
            }
        },
        createRoute() {
            this.$router.push({name: this.$route.name == 'purchase_list_1' ? 'purchase_create_1' : 'purchase_create_2'});
        },
        getList() {
            this.loading = true;
            this.page += 1;
            AdminRequests.listPurchases({
                // page: this.page,
                type: this.$route.name == 'purchase_list_1' ? 1 : 2
            }).then(res => {
                this.list = res;
                // this.list = this.list.concat(res.data);
                // this.last_page = res.last_page;
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
        this.getList();
    }
};
</script>

<style>

.arrow {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    cursor: pointer;
}

.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}

.left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
}

.up {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
}

.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
</style>
