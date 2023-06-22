<template>
    <div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
            option</label>
        <select id="countries" @change="handleChange" :value="value"
                :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':error}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Choose a country</option>
            <option v-for="option in options" :value="option[optionValue]">{{ option[optionName] }}</option>
        </select>
    </div>

</template>

<script>
export default {
    name: "UiSelect",
    props: {
        options: {
            type: Array
        },
        value: {},
        optionName: {
            default: 'name'
        },
        optionValue: {
            default: 'id'
        },
        error: {
            default: false
        }
    },
    data() {
        return {};
    },
    methods: {
        handleChange(e) {
            this.$emit('input', e.target.value);
        }
    }
};
</script>

<style scoped>

</style>
