<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    packages: Object,
    totalPackageProcessing: String
})

const packageStatusColor = (status) => {
    try {
        if (status == 'Received at Warehouse') {
            return "bg-yellow-100 text-yellow-800";
        }
        else if (status == 'Waiting for Pickup') {
            return "bg-orange-100 text-orange-800";
        } else if (status == 'Package Delivered') {
            return "bg-green-100 text-green-800";
        } else if (status == 'Package Cancelled') {
            return "bg-red-100 text-red-800";
        } else {
            return "bg-gray-100 text-gray-800";
        }
    } catch (error) {
        return "bg-gray-100 text-gray-800";
    }
}
</script>

<template>

    <Head title="Packages" />

    <AuthenticatedLayout>
        <div aria-hidden="true" class="min-h-screen bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Packages</h1>
                </div>
            </header>


            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <!-- Card Section -->
                    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                        <!-- Grid -->
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                            <!-- Card -->
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="p-4 md:p-5">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-cyan-600">
                                            Total packages
                                        </p>
                                    </div>

                                    <div class="mt-1 justify-center flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-cyan-400 dark:text-gray-200">
                                            {{ props.packages.meta.total }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="p-4 md:p-5">
                                    <div class="flex items-center gap-x-2">
                                        <p class="text-xs uppercase tracking-wide text-cyan-600">
                                            Packages in processing
                                        </p>
                                    </div>

                                    <div class="mt-1 flex justify-center items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-cyan-400 dark:text-gray-200">
                                            {{ props.totalPackageProcessing }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <!-- <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                            <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500">
                                        Avg. Click Rate
                                    </p>
                                </div>

                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                                        56.8%
                                    </h3>
                                    <span class="flex items-center gap-x-1 text-red-600">
                                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                                            <polyline points="16 17 22 17 22 11" />
                                        </svg>
                                        <span class="inline-block text-sm">
                                            1.7%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                            <!-- End Card -->

                            <!-- Card -->
                            <!-- <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                            <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500">
                                        Pageviews
                                    </p>
                                </div>

                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                                        92,913
                                    </h3>
                                </div>
                            </div>
                        </div> -->
                            <!-- End Card -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>

            <!-- Table Section -->
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                <!-- Card -->
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                <!-- Header -->
                                <div
                                    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                    <div>
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                            All Packages
                                        </h2>
                                        <!-- <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Add users, edit and more.
                                    </p> -->
                                    </div>


                                </div>
                                <!-- End Header -->

                                <!-- Table -->
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 ">
                                    <thead class="bg-pink-100 dark:bg-slate-800">
                                        <tr class="">
                                            <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200 pl-3">
                                                        Tracking Number
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        vendor
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Weight
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Status
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Last Updated
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-end"></th>
                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr v-for="item in      packages.data     " :key="item.id">
                                            <td class="size-px whitespace-nowrap pl-3">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <img class="inline-block size-[25px] rounded-sm"
                                                            src="https://www.svgrepo.com/show/276591/package-box.svg"
                                                            alt="Image Description">
                                                        <div class="grow">
                                                            <span
                                                                class="uppercase text-sm font-medium px-2 py-1 bg-cyan-100 text-cyan-800 rounded-lg dark:text-gray-200">{{
                                                item.tracking_number }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-600 dark:text-gray-200">{{
                                                item.vendor
                                            }}</span>
                                                    <!-- <span class="block text-sm text-gray-500">Human resources</span> -->
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-600">{{ item.weight }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span :class="packageStatusColor(item.status)" class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs
                                                        font-medium rounded-full
                                                        ">
                                                        <svg viewBox="0 0 24 24" width="22" height="22"
                                                            stroke="currentColor" stroke-width="2" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="css-i6dzq1">
                                                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                            </path>
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                                        </svg>
                                                        {{ item.status }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <span class="flex items-center text-xs text-gray-500"><svg
                                                                viewBox="0 0 24 24" width="20" height="20"
                                                                stroke="currentColor" stroke-width="2" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="mr-1 text-teal-500">
                                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                                                </rect>
                                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                                            </svg>{{
                                                item.updated_at
                                            }}</span>

                                                    </div>
                                                </div>
                                            </td>

                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5">
                                                    <Link
                                                        class="inline-flex items-center font-semibold px-4 py-0.5 text-white bg-cyan-500 hover:bg-cyan-600 active:bg-cyan-700 focus:outline-none focus:ring focus:ring-cyan-300 rounded-full"
                                                        :href="route('packages.show', item.id)">
                                                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-1"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    Details
                                                    </Link>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table -->

                                <!-- Footer -->
                                <div
                                    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <span class="font-semibold text-gray-800 dark:text-gray-200">{{
                                                packages.total }}</span>
                                            results
                                        </p>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">
                                            <Link v-if="packages.prev_page_url" :href="packages.prev_page_url"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m15 18-6-6 6-6" />
                                            </svg>
                                            Prev
                                            </Link>


                                            <Link v-if="packages.next_page_url" :href="packages.next_page_url"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Next
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Footer -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Table Section -->
        </div>

    </AuthenticatedLayout>
</template>