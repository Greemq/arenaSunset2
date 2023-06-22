<template>
    <div class="md:pr-3">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{label}}
            </label>
        <input :type="type" id="password"
               :value="value"
               :placeholder="placeholder"
               @input="updateInput"
               :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':error}"
               :disabled="disabled"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               required>
    </div>
</template>

<script>
export default {
    name: "UiInput",
    props: {
        placeholder: {
            type: String
        },
        description: {
            type: String
        },
        label: {
            type: String
        },
        type: {
            default: 'text'
        },
        disabled: {
            default: false
        },
        error: {
            default: false
        },
        value:{

        }

    },
    methods: {
        updateInput(e) {
            this.$emit('input', e.target.value);
        },
    }
};
</script>

<style scoped>

</style>
