<template>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 w-96">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                       v-model="form.email">Your
                    email</label>
                <input type="email" id="email"
                       :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':error}"
                       :disabled="loading"
                       v-model="form.email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" id="password" v-model="form.password"
                       :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700':error}"
                       :disabled="loading"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       required>
            </div>
            <button type="submit" @click="login" :disabled="loading"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </div>
    </div>

</template>

<script>
import authApi from "../../_api/Auth";

export default {
    name: "Login",
    data() {
        return {
            form: {
                email: null,
                password: null


            },
            error: false,
            loading: false
        };
    },
    methods: {
        login() {
            this.error = false;
            this.loading = true;
            authApi.login(this.form).then(res => {
                this.$router.push({name: 'flats'});
                this.loading = false;
            }).catch(err => {
                this.loading = false;
                this.error = true;

            });
        }
    },
    mounted() {
        if (this.$store.state.auth.authorized)
            this.$router.push({name: 'flats'});
    }
};
</script>

<style scoped>

</style>
