<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue'


// const val = ref();
// const calc = val + 10;

//console.log(calc);
</script>

<script>
import { ref } from 'vue'
export default {
    data: function () {
        return {
            calculatedValue: 0
        }
    },
    methods: {
        calcWeight() {
            const value = this.$refs.myInput.value
            this.calculatedValue = (value * 250) + 250
        }
    }
}

</script>


<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div aria-hidden="true" class="min-h-screen bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Calculator</h1>
                </div>
            </header>

            <div class="w-full my-8 px-4 lg:px-10">
                <div class="grid grid-cols-5 gap-4 mx-auto">
                    <!-- First Half -->
                    <div class="col-span-12 lg:col-span-3 ">
                        <div class="bg-white border shadow-sm rounded-xl p-4 min-w-full inline-block align-middle">
                            <form class="max-w-full p-4">
                                <label for="calc-weight"
                                    class="block mb-2 text-lg font-medium text-pink-600 dark:text-white">
                                    Rates</label>
                                <p class="mb-2 text-sm font-light">Enter the weight in pounds (lbs) of the item
                                    below
                                    to find
                                    out
                                    the freight
                                    fee rate.</p>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 3a4 4 0 0 1 4 4c0 .73-.19 1.41-.54 2H18c.95 0 1.75.67 1.95 1.56C21.96 18.57 22 18.78 22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2c0-.22.04-.43 2.05-8.44C4.25 9.67 5.05 9 6 9h2.54A3.89 3.89 0 0 1 8 7a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m-6 6v8h5v-2H8v-6zm7 0v8h3c1.11 0 2-.89 2-2v-.5c0-.57-.25-1.12-.68-1.5c.43-.38.68-.93.68-1.5V13c0-1.11-.89-2-2-2zm2 2h1v1h-1zm0 3h1v1h-1z" />
                                        </svg>
                                    </span>
                                    <input @keyup="calcWeight" type="number" name="myInput" ref="myInput"
                                        id="calc-weight"
                                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter Weight in lbs.">
                                </div>
                            </form>
                            <div class="flex mx-8 mt-6 px-4 py-6 mb-4 rounded-md bg-pink-50">
                                <h2 class="mr-4">Calculated Rate : </h2>
                                <h1 v-if="calculatedValue > 250">${{ calculatedValue }}</h1>
                            </div>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="col-span-12 lg:col-span-2 col-end-auto">
                        <div class="w-full mx-auto ">
                            <div
                                class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="inline-flex justify-center items-center">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="1"
                                        fill="#FF007F" stroke-linecap="round" stroke-linejoin="round"
                                        class="css-i6dzq1">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>

                                    <span class="text-xs font-semibold uppercase text-cyan-600 dark:text-gray-400">

                                        My Shipping Address</span>
                                </div>

                                <div class="text-center">
                                    <p
                                        class="text-md sm:text-md lg:text-lg font-semibold text-pink-600 dark:text-gray-200">
                                        {{ $page.props.auth.user.name }}
                                    </p>
                                    <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                        1910 South State Road 7
                                    </p>
                                    <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                        <span class="bg-pink-50 px-2 rounded-md"> Suite #9 BS {{
                                        $page.props.auth.user.customer_number
                                            }}</span>
                                    </p>
                                    <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                        Miramar, FL 33023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
