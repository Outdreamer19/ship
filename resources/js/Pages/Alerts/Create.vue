<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    tracking_number: "",
    vendor: "",
    weight: "",
    pickup_location: "",
    order_description: "",
    courier: "",
    usd_value: "",
    file: null,
});

const handleFileUpload = (event) => {
    form.file = event.target.files[0];
};

const store = () => {
    form.post(route("alerts.store"), {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
            // alert('success');
        },
        onError: (error) => {
            // console.log(error);
        },
    });
};
</script>

<template>

    <Head title="Create Alert" />

    <AuthenticatedLayout>
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form @submit.prevent="store">
                <div>
                    <label for="tracking_number">Tracking number</label>
                    <input v-model="form.tracking_number" name="tracking_number" id="tracking_number" />
                    <p v-if="form.errors.tracking_number">
                        {{ form.errors.tracking_number }}
                    </p>
                </div>

                <div>
                    <input @change="handleFileUpload" type="file">
                    <p v-if="form.errors.file">
                        {{ form.errors.file }}
                    </p>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div> -->
        <!-- Contact Us -->
        <div aria-hidden="true" class="bg-gradient-to-b from-cyan-50  from-1/5 via-white to-white">

            <header>
                <div class="mx-auto mb-4 max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                    <Link :href="route('alerts.index')"
                        class="flex w-20 lg:w-[6%] items-center py-0.5 px-2 text-sm font-semibold rounded-lg border border-transparent bg-cyan-400 text-white hover:bg-cyan-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" class="p-0 m-0">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>Back</Link>
                    <!-- <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Packages Details</h1> -->
                </div>
            </header>
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                <div class="max-w-xl mx-auto">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-pink-500 sm:text-4xl dark:text-white">
                            Create Pre-Alert
                        </h1>
                    </div>
                </div>

                <div class="mt-12 bg-white max-w-lg mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">

                        <form @submit.prevent="store">
                            <div class="grid gap-4 lg:gap-6">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                    <div>
                                        <label for="tracking_number"
                                            class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">Tracking
                                            Number</label>
                                        <input v-model="form.tracking_number" type="text" name="tracking_number"
                                            id="tracking_number"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <p class="text-red-500 text-xs" v-if="form.errors.tracking_number">
                                            {{ form.errors.tracking_number }}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="vendor"
                                            class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">Vendor</label>
                                        <input v-model="form.vendor" type="text" name="vendor" id="vendor"
                                            autocomplete="vendor" placeholder="Amazon, Shein etc.."
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <p class="text-red-500 text-xs" v-if="form.errors.vendor">
                                            {{ form.errors.vendor }}
                                        </p>
                                    </div>

                                    <div>
                                        <label for="weight"
                                            class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">Estimated
                                            Weight
                                        </label>
                                        <input v-model="form.weight" type="text" name="weight" id="weight"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <p class="text-red-500 text-xs" v-if="form.errors.weight">
                                            {{ form.errors.weight }}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <div class="space-y-2">
                                    <label for="pickup_location"
                                        class="inline-block text-sm font-medium text-cyan-500 mt-2.5 dark:text-gray-200">
                                        Pickup Location
                                    </label>

                                    <select v-model="form.pickup_location" id="pickup_location" name="pickup_location"
                                        class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option selected>Select a Location</option>
                                        <option>Montego Bay Square</option>
                                        <option>Falmouth Square</option>
                                        <option>On the main (Between Montego Bay & Falmouth)</option>
                                    </select>
                                    <p class="text-red-500 text-xs" v-if="form.errors.pickup_location">
                                        {{ form.errors.pickup_location }} </p>
                                </div>

                                <div>
                                    <label for="order_description"
                                        class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">Order
                                        Description</label>
                                    <textarea v-model="form.order_description" id="order_description"
                                        placeholder="Shoes, Makeup kit etc..." name="order_description" rows="4"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                                    <p class="text-red-500 text-xs" v-if="form.errors.order_description">
                                        {{ form.errors.order_description }}
                                    </p>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="courier"
                                            class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">Courier</label>
                                        <input v-model="form.courier" type="text" name="courier" id="courier"
                                            autocomplete="vendor" placeholder="UPS, Fedex etc.."
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <p class="text-red-500 text-xs" v-if="form.errors.courier">
                                            {{ form.errors.courier }}
                                        </p>
                                    </div>

                                    <div>
                                        <label for="usd_value"
                                            class="block mb-2 text-sm text-cyan-500 font-medium dark:text-white">
                                            Cost <small>(USD)</small>
                                        </label>
                                        <input v-model="form.usd_value" type="text" name="usd_value" id="usd_value"
                                            placeholder="70"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <p class="text-red-500 text-xs" v-if="form.errors.usd_value">
                                            {{ form.errors.usd_value }}
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <input @change="handleFileUpload" type="file" class="my-3 text-cyan-500">
                                    <p class="text-red-500 text-xs" v-if="form.errors.file">
                                        {{ form.errors.file }}
                                    </p>
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div class="mt-8 grid">
                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Create
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
