<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    userStatistics: Object,
    recentPackages: Object,
    balance: Object
})
console.log(props.recentPackages);
const packageStatusColor = (status) => {
    try {
        if (status == 'Received at Warehouse') {
            return "bg-yellow-100 text-yellow-800";
        }
        else if (status == 'Waiting for Pickup') {
            return "bg-orange-100 text-orange-800";
        } 
        else if (status == 'Package Delivered') {
            return "bg-green-100 text-green-800";
        } 
        else if (status == 'Private') {
            return "bg-slate-100 text-slate-800";
        } 
        else if (status == 'Package Cancelled') {
            return "bg-red-100 text-red-800"; 
        }
        else {
            return "bg-gray-100 text-gray-800";
        }
    } catch (error) {
        return "bg-blue-100 text-gray-800";
    }
}
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div aria-hidden="true" class="min-h-screen pb-4 bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">

            <!-- End Gradients -->



            <!-- End Hero -->
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Dashboard</h1>
                    <p class="text-pink-400">Welcome {{ $page.props.auth.user.name }}</p>
                </div>

            </header>

            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <!-- Card Section -->

                    <div class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                        <!-- Grid -->
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                            <!-- Card -->
                            <div
                                class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="inline-flex justify-center items-center">
                                    <span class="size-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                    <span class="text-xs font-semibold uppercase text-cyan-600 dark:text-gray-400">Total
                                        Packages</span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-cyan-400 dark:text-gray-200">
                                        {{ props.userStatistics.total_packages }}
                                    </h3>
                                </div>

                                <!-- <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-gray-700">
                    <dt class="pe-3">
                        <span class="text-green-600">
                            <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                            <span class="inline-block text-sm">
                                1.7%
                            </span>
                        </span>
                        <span class="block text-sm text-gray-500">change</span>
                    </dt>
                    <dd class="text-start ps-3">
                        <span class="text-sm font-semibold text-gray-800 dark:text-gray-200">5</span>
                        <span class="block text-sm text-gray-500">last week</span>
                    </dd>
                </dl> -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="inline-flex justify-center items-center">
                                    <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
                                    <span
                                        class="text-xs font-semibold uppercase text-cyan-600 dark:text-gray-400">Packages
                                        in processing
                                    </span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-cyan-400 dark:text-gray-200">
                                        {{ props.userStatistics.total_packages_processing }}
                                    </h3>
                                </div>


                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                                <div class="inline-flex justify-center items-center">
                                    <span class="size-2 inline-block bg-slate-500 rounded-full me-2"></span>
                                    <span
                                        class="text-xs font-semibold uppercase text-cyan-600 dark:text-gray-400">Current
                                        Balance</span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-green-600 dark:text-gray-200">
                                        ${{ props.balance }}
                                    </h3>
                                </div>

                                <dl
                                    class="flex justify-center items-center divide-x divide-gray-200 dark:divide-gray-700">
                                    <dt class="pe-3">
                                        <span class="text-gray-600">
                                            <span class="inline-block text-sm">
                                                JMD Currency
                                            </span>
                                        </span>
                                        
                                    </dt>

                                </dl>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>


            <div class="w-full">
                <div class="flex flex-wrap gap-y-4 lg:-mx-4">

                    <!-- First Half -->
                    <div class="w-full mx-auto lg:w-2/3 xl:w-2/3">
                        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                            <!-- Card -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="bg-white border px-4 border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                            <!-- Header -->
                                            <div
                                                class=" py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                                <div>
                                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                                        Recent Packages
                                                    </h2>
                                                    <!-- <p class="text-sm text-gray-600 dark:text-gray-400">
                            Add users, edit and more.
                        </p> -->
                                                </div>


                                            </div>
                                            <!-- End Header -->

                                            <!-- Table -->
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-pink-100 dark:bg-slate-800">
                                                    <tr>

                                                        <th scope="col" class=" lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span
                                                                    class="text-xs pl-4 font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
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


                                                    </tr>
                                                </thead>

                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    <tr v-for="item in recentPackages" :key="item.id">
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                                <div class="flex pl-4 items-center gap-x-3">
                                                                    <img class="inline-block size-[38px] rounded-sm"
                                                                        src="https://www.svgrepo.com/show/276591/package-box.svg"
                                                                        alt="Image Description">
                                                                    <div class="grow">
                                                                        <span
                                                                            class="uppercase text-sm font-medium bg-cyan-100 rounded-lg px-2 py-1 text-cyan-800 dark:text-gray-200">{{
                        item.tracking_number }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span
                                                                    class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{
                        item.vendor
                    }}</span>
                                                                <!-- <span class="block text-sm text-gray-500">Human resources</span> -->
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class="text-sm text-gray-500">{{
                            item.weight
                                                                    }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span :class="packageStatusColor(item.status)"
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    {{ item.status }}
                                                                </span>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table -->

                                            <!-- Footer -->
                                            <div
                                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                                <!-- <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <span
                                                class="font-semibold text-gray-800 dark:text-gray-200">6</span>
                                            results
                                        </p>
                                    </div> -->

                                                <!-- <div>
                                        <div class="inline-flex gap-x-2">
                                            <Link v-if="packages.prev_page_url"
                                                :href="packages.prev_page_url"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            <svg class="flex-shrink-0 size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m15 18-6-6 6-6" />
                                            </svg>
                                            Prev
                                            </Link>


                                            <Link v-if="packages.next_page_url"
                                                :href="packages.next_page_url"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Next
                                            <svg class="flex-shrink-0 size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                            </Link>
                                        </div>
                                    </div> -->
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="w-full mx-auto lg:w-1/3 xl:w-1/3">
                        <div
                            class="flex flex-col gap-y-3 lg:gap-y-5 p-4 mx-4 md:p-5 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                            <div class="inline-flex justify-center items-center">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="1"
                                    fill="#FF007F" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>

                                <span class="text-xs font-semibold uppercase text-cyan-600 dark:text-gray-400">

                                    My Shipping Address</span>
                            </div>

                            <div class="text-center">
                                <p class="text-md sm:text-md lg:text-lg font-semibold text-pink-600 dark:text-gray-200">
                                    {{ $page.props.auth.user.name }}
                                </p>
                                <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    2215 SW 59th Ter
                                </p>
                                <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    <span class="bg-pink-100 px-2 rounded-md"> BS {{
                                        props.userStatistics.customer_number
                                        }}</span>
                                </p>
                                <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    West Park, Florida 33023
                                </p>
                                <p class="text-md sm:text-md lg:text-lg text-gray-800 dark:text-gray-200">
                                    USA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.orange {
    background-color: rgb(255 237 213);
    color: rgb(154 52 18);
}

.yellow {
    background-color: rgb(254 249 195);
    color: rgb(119, 109, 3);
}

.green {
    background-color: rgb(204 251 241);
    color: rgb(17 94 89);
}

.red {
    background-color: rgb(254 226 226);
    color: rgb(187, 6, 6);
}
</style>
