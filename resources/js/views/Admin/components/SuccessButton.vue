<template>
    <button type="button"
            @click="$emit('click')" :disabled="disabled"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        {{ label }}
    </button>
</template>

<script>
export default {
    name: "SuccessButton",
    props: {
        label: {
            default: 'SAVE'
        },
        disabled: {
            default: false
        }
    }
};
</script>

<style scoped>

</style>
