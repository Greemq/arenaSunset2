<template>
    <div>
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                aria-controls="default-sidebar" type="button"
                class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
        <aside id="default-sidebar"
               class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
               aria-label="Sidebar" aria-hidden="true">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li v-for="route in routes" :key="route.title">
                        <router-link :to="{name:route.name}"
                                     class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                                     :class="{active_sidebar:route.active.includes($route.name)}"
                        >
                            <svg aria-hidden="true"
                                 class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">{{ route.title }}</span>
                        </router-link>

                    </li>
                </ul>
            </div>
        </aside>
    </div>

</template>

<script>
export default {
    name: "Sidebar",
    data() {
        return {};
    },
    computed: {
        routes() {
            return [
                // {
                //     title: 'dashboard',
                //     name: 'admin_main'
                // },
                {
                    title: this.$t('flats'),
                    name: 'flats_list',
                    active: ['flats_list', 'flats_item', 'flats_create']
                },
                {
                    title: 'progress',
                    name: 'progress_list',
                    active: ['progress_list', 'progress_item', 'progress_create']
                },
                {
                    title: 'Условия покупки ЖК',
                    name: 'purchase_list_1',
                    active: ['purchase_list_1', 'purchase_item_1', 'purchase_create_1']

                },
                {
                    title: 'Условия покупки БЦ',
                    name: 'purchase_list_2',
                    active: ['purchase_list_2', 'purchase_item_2', 'purchase_create_2']
                },
                {
                    title: 'Контакты',
                    name: 'contacts',
                    active: ['contacts']
                },


            ];
        }
    }
};
</script>

<style>
.active_sidebar {
    background-color: lightblue!important;
}
</style>
