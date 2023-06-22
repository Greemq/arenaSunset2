<template>
    <nav class=" border-gray-200  sm:ml-64">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex md:order-2">
                <button type="button" @click="$emit('create')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Create
                </button>
            </div>

        </div>
    </nav>


</template>

<script>
export default {
    name: "NavBar"
};
</script>

<style scoped>

</style>
