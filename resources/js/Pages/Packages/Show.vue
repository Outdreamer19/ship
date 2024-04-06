<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
// import moment from "moment";

const props = defineProps({
    package: Object
    //moment: moment
})

</script>
<template>

    <Head title="Package Details" />

    <AuthenticatedLayout>
        <div aria-hidden="true" class="bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <button onclick="history.back()"
                        class="flex items-center px-2 text-sm font-semibold rounded-lg border border-transparent bg-cyan-400 text-white hover:bg-cyan-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="p-0 m-0">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>Back</button>
                    <!-- <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Packages Details</h1> -->
                </div>
            </header>


            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <!-- Card Section -->
                    <div class="max-w-5xl px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">

                        <div
                            class="relative flex flex-col bg-white shadow-lg rounded-xl pointer-events-auto dark:bg-gray-800">
                            <div class="relative overflow-hidden min-h-32 bg-cyan-300 text-center rounded-t-xl">


                                <!-- SVG Background Element -->
                                <figure class="absolute inset-x-0 bottom-0 -mb-px">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewBox="0 0 1920 100.1">
                                        <path fill="currentColor" class="fill-white dark:fill-gray-800"
                                            d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                    </svg>
                                </figure>
                                <!-- End SVG Background Element -->
                            </div>

                            <div class="relative z-10 -mt-12">
                                <!-- Icon -->
                                <span
                                    class="mx-auto flex justify-center items-center size-[62px] rounded-full border border-gray-200 bg-white text-gray-700 shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                    <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </span>
                                <!-- End Icon -->
                            </div>

                            <!-- Body -->
                            <div class="p-4 sm:p-7 overflow-y-auto">
                                <div class="text-center">
                                    <h3 class="text-3xl font-semibold text-pink-600 dark:text-gray-200">
                                        Package Details
                                    </h3>

                                </div>

                                <!-- Grid -->
                                <div class="mt-5 sm:mt-10 grid grid-cols-2 sm:grid-cols-3 gap-5">
                                    <div>
                                        <span class="block text-sm uppercase text-cyan-500">Tracking Number:
                                        </span>
                                        <span class="block text-sm font-medium text-gray-600 dark:text-gray-200"><span
                                                class="rounded-full px-2 py-0.5 bg-pink-10 text-pink-800">{{
                                                    package.tracking_number
                                                }}</span>
                                        </span>
                                    </div>
                                    <!-- End Col -->

                                    <div>
                                        <span class="block text-sm uppercase text-cyan-600">Status
                                        </span>
                                        <span class="block text-sm font-medium text-gray-800 dark:text-gray-200">{{
                                                        package.status }}</span>
                                    </div>
                                    <!-- End Col -->

                                    <div>
                                        <span class="block text-sm uppercase text-cyan-600">Last Update
                                        </span>
                                        <div class="flex items-center gap-x-2">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="text-pink-500">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <span class="block text-sm font-medium text-gray-800 dark:text-gray-200"> {{ package.updated_at }}
                                                   
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Grid -->

                                <div class="mt-5 sm:mt-10">
                                    <h4 class="text-xs font-semibold uppercase text-yellow-500 dark:text-gray-200">
                                        Summary</h4>

                                    <ul class="mt-3 flex flex-col">
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                            <div class="flex items-center justify-between w-full">
                                                <span>Vendor/Merchant :</span>
                                                <span>{{ package.vendor }}</span>
                                            </div>
                                        </li>
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                            <div class="flex items-center justify-between w-full">
                                                <span>Weight :</span>
                                                <span>{{ package.weight }}</span>
                                            </div>
                                        </li>
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                            <div class="flex items-center justify-between w-full">
                                                <span>Order Description :</span>
                                                <span>{{ package.order_description }}</span>
                                            </div>
                                        </li>
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                            <div class="flex items-center justify-between w-full">
                                                <span></span>
                                                <span> </span>
                                            </div>

                                        </li>
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-lg font-semibold bg-gray-50 border text-cyan-400 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-800 dark:border-gray-700 dark:text-gray-200">
                                            <div class="flex items-center justify-between w-full">
                                                <span>Total Charge : </span>
                                                <span class="text-cyan-400">${{ package.balance }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="mt-5 sm:mt-10">
                                    <p class="text-sm text-gray-600">If you have any questions, please
                                        contact us at <a
                                            class="inline-flex items-center gap-x-1.5 text-yellow-500 decoration-2 hover:underline font-medium"
                                            href="#">brightsmile249@gmail.com</a> or call at <a
                                            class="inline-flex items-center gap-x-1.5 text-yellow-500 decoration-2 hover:underline font-medium"
                                            href="tel:+18763121067">+1(876) 312-1067</a></p>
                                </div>
                            </div>
                            <!-- End Body -->

                        </div>
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>


        </div>

    </AuthenticatedLayout>
</template>
