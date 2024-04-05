<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref } from 'vue'
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ExclamationTriangleIcon } from '@heroicons/vue/24/outline'
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    alerts: Object
});

const deleteModal = ref(false)
const alertIdToDelete = ref('')

const showDeleteModal = (id) => {
    alertIdToDelete.value = id
    deleteModal.value = true
}

const confirmDeleteAlert = () => {
    useForm({}).delete(route("alerts.destroy", alertIdToDelete.value), {
        onSuccess: () => {
            deleteModal.value = false

        },
    });

    //console.log(alertIdToDelete.value)
    // axios.delete(route('alerts.destroy', alertIdToDelete.value))
    //     .then(response => {
    //         console.log(response);
    //     })
    //     .catch(error => {
    //         console.error(error);
    //     });

}



</script>

<template>

    <Head title="Alerts" />

    <AuthenticatedLayout>

        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <Link :href="route('alerts.create')">Create Alert</Link>

        </div> -->
        <div aria-hidden="true" class=" bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">


            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Alerts</h1>
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
                                        <p class="text-xs font-semibold uppercase text-pink-600 tracking-wide">
                                            Total Alerts
                                        </p>
                                    </div>

                                    <div class="mt-1 justify-center flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                                            {{ alerts.total }}
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
                                        <p class="text-xs font-semibold uppercase text-pink-600 tracking-wide">
                                            Active Alerts
                                        </p>
                                    </div>

                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                                            ---
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

            <div class="w-full">
                <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div
                                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                    <!-- Header -->
                                    <div
                                        class="px-6 py-4 gap-3  md:items-center border-b border-gray-200 dark:border-gray-700">

                                        <div class="flex justify-between sm:flex sm:items-center">
                                            <div class="sm:flex-auto">
                                                <h1 class="text-base font-semibold leading-6 text-gray-900">Alerts
                                                    Listing</h1>
                                                <p class="mt-2 text-sm text-gray-700">Table showing a list of all
                                                    pre-alerts
                                                    created.</p>
                                            </div>
                                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">

                                                <Link :href="route('alerts.create')" type="button"
                                                    class="flex items-center rounded-full bg-cyan-500 px-3 py-1 text-center text-sm font-semibold text-white shadow-sm hover:bg-cyan-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-500">
                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" class="css-i6dzq1">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                                Create Alert</Link>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Header -->

                                    <!-- Table -->
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-pink-100 dark:bg-slate-800">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    Date Created</th>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    Tracking Number</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Vendor</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Order Description</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Weight</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Courier</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    USD Value</th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                    <span class="sr-only">Remove</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr v-for="alert in alerts.data" :key="alert.id">
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ new
                Date(alert.created_at).toLocaleString() }}</td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ alert.tracking_number }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ alert.vendor }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ alert.order_description }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ alert.weight }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ alert.courier }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ alert.usd_value }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <a :href="alert.invoice_path" target="_blank">view
                                                        Invoice</a>
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <button @click='showDeleteModal(alert.id)' type="button"
                                                        class="text-red-600 hover:text-red-900"><svg viewBox="0 0 24 24"
                                                            width="24" height="24" stroke="currentColor"
                                                            stroke-width="2" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round" class="text-redd-600">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg><span class="sr-only">Alert</span></button>
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
                                                <span class="font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ props.alerts.total }}</span>
                                                results
                                            </p>
                                        </div>

                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                <Link v-if="alerts.prev_page_url" :href="alerts.prev_page_url"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m15 18-6-6 6-6" />
                                                </svg>
                                                Prev
                                                </Link>


                                                <Link v-if="alerts.next_page_url" :href="alerts.next_page_url"
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

            </div>

        </div>
    </AuthenticatedLayout>
    <TransitionRoot as="template" :show="deleteModal">
        <Dialog as="div" class="relative z-10" @close="deleteModal = false">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
            </TransitionChild>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <TransitionChild as="template" enter="ease-out duration-300"
                        enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                        leave-from="opacity-100 translate-y-0 sm:scale-100"
                        leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <DialogPanel
                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <ExclamationTriangleIcon class="h-6 w-6 text-red-600" aria-hidden="true" />
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <DialogTitle as="h3" class="text-base font-semibold leading-6 text-gray-900">
                                        Delete Alert</DialogTitle>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Are you sure you want to delete this
                                            alert? </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                <button type="button"
                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto"
                                    @click="confirmDeleteAlert">Yes, I'm Sure</button>
                                <button type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                    @click="deleteModal = false" ref="cancelButtonRef">Cancel</button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
