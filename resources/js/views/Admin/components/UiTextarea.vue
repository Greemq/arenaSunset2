<template>
    <div class="md:pr-3">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ label }}
        </label>
        <textarea id="password"
                  :value="value"
                  :placeholder="placeholder"
                  @input="updateInput"
                  :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':error}"
                  :disabled="disabled"
                  rows="5"
                  style="resize: none;"
                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  required></textarea>


    </div>
</template>

<script>
export default {
    name: "UiTextarea",
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
        disabled: {
            default: false
        },
        error: {
            default: false
        },
        value: {}

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
