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
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Shipping Address</h1>
                </div>
            </header>

            <div class="w-full my-8 px-4 lg:px-10">
                <div class="grid grid-cols-5 gap-4 mx-auto">
                    <!-- First Half -->
                    <div class="col-span-12 lg:col-span-3 ">
                        <div class="bg-white border shadow-sm rounded-xl p-4 min-w-full inline-block align-middle">
                            <p class="text-md py-4">This is your official shipping overseas address. <br>Your address
                                can be
                                used by yourself or any friends/family members.</p>
                            <div
                                class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="inline-flex justify-left items-center">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="1"
                                        fill="#FF007F" stroke-linecap="round" stroke-linejoin="round"
                                        class="css-i6dzq1">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>

                                    <span class="text-sm font-semibold uppercase text-cyan-600 dark:text-gray-400">

                                        My Shipping Address</span>
                                </div>

                                <div class="text-left">
                                    <p
                                        class="text-lg sm:text-lg lg:text-xl font-semibold text-pink-600 dark:text-gray-200">
                                        {{ $page.props.auth.user.name }}
                                    </p>
                                    <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    2215 SW 59th Ter
                                </p>
                                    <p class="text-lg sm:text-lg lg:text-xl  text-gray-800 dark:text-gray-200">
                                        <span class="bg-pink-100 px-2 rounded-md">BS {{
                                            $page.props.auth.user.customer_number
                                            }}</span>
                                    </p>
                                    <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    West Park, Florida 33023
                                </p>
                                <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    USA
                                </p>
                                </div>
                                <p class="text-cyan-400">Please make contact if you need any further assistance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="col-span-1 col-end-auto">


                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
