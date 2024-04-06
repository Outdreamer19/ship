<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>

    <Head title="Bright Smile Courier" />


    <div
        class="relative overflow-hidden sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <!-- <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Register
                </Link>
            </template>
</div> -->


        <div class="w-full mx-auto">
            <div class="overflow-hidden ">
                <!-- Header -->

                <header class="flex flex-wrap md:justify-start md:flex-nowrap w-full text-sm py-1 md:py-0 ">
                    <nav class="max-w- bg-gradient-to-b from-pink-500 fixed top-0 z-50 w-full mx-auto px-4 md:px-6 lg:px-8"
                        aria-label="Global">
                        <div class="relative md:flex md:items-center md:justify-between">
                            <div class="flex items-center justify-between">
                                <a class="flex-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="#">
                                    <img src="img/logo-white.png" alt="Logo" width="30%">
                                </a>

                                <div class="md:hidden">
                                    <button type="button"
                                        class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        data-hs-collapse="#navbar-collapse-with-animation"
                                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="3" x2="21" y1="6" y2="6" />
                                            <line x1="3" x2="21" y1="12" y2="12" />
                                            <line x1="3" x2="21" y1="18" y2="18" />
                                        </svg>
                                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18" />
                                            <path d="m6 6 12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div id="navbar-collapse-with-animation"
                                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                                <div
                                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
                                    <div
                                        class="flex flex-col gap-x-0 mt-3 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                                        <a class="font-extrabold font-serif text-lg text-yellow-300 hover:text-yellow-200 py-2 md:py-3 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="#how-it-works" aria-current="page">
                                            How It Works
                                        </a>

                                        <a class="font-extrabold font-serif text-lg text-yellow-300 hover:text-yellow-200 py-2 md:py-3 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="#rates">
                                            Rates
                                        </a>

                                        <a class="font-extrabold font-serif text-lg text-yellow-400 hover:text-yellow-200 py-2 md:py-3 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="#about-us">
                                            About
                                        </a>

                                        <a class="font-extrabold font-serif text-lg text-yellow-400 hover:text-yellow-200 py-2 md:py-3 dark:text-gray-400 dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="#contact">
                                            Contact
                                        </a>
                                        <!-- <a :href="route('dashboard')"
                                            class="font-semibold text-yellow-400 hover:text-yellow-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            Dashboard</a> -->
                                        <div class=" sm:top-0 sm:right-0 p-4 text-end">
                                            <!-- <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                                                class="font-semibold text-yellow-400 hover:text-yellow-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            Dashboard</Link> -->
                                            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                                                class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-white text-cyan-500 hover:bg-cyan-500 hover:text-white disabled:opacity- disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                                <line x1="6" y1="20" x2="6" y2="14"></line>
                                            </svg>Dashboard
                                            </Link>

                                            <template v-else>
                                                <Link :href="route('login')"
                                                    class="font-semibold text-yellow-400 hover:text-yellow-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-full focus:outline-red-500">
                                                Log in</Link>

                                                <Link :href="route('register')"
                                                    class="ms-4 font-semibold text-yellow-400 hover:text-yellow-200 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                Register</Link>
                                            </template>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- End Header -->

                <!-- Hero -->
                <div class="relative bg-gradient-to-b from-pink-300 to-white">
                    <!-- Gradients -->
                    <div aria-hidden="true" class="flex absolute -top-48 start-0 -z-[1]">
                        <div
                            class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-[600px] dark:bg-purple-900 dark:opacity-20">
                        </div>
                        <div
                            class="bg-slate-200 opacity-90 blur-3xl w-[577px] h-[300px] transform translate-y-32 dark:bg-slate-800/60">
                        </div>
                    </div>
                    <!-- End Gradients -->
                    <!-- Hero https://cdn.pixabay.com/photo/2024/02/26/14/13/box-8598084_1280.jpg-->
                    <div class="relative overflow-hidden "
                        style="background-image:url('img/package.png');background-position:center; background-size: cover;">
                        <!-- Gradients -->
                        <div aria-hidden="true"
                            class="flex absolute -top-96 start-1/2 transform -translate-x-1/2 opacity-50">
                            <div
                                class="bg-gradient-to-r from-pink-300/50 to-pink-100 blur-xl w-[44rem] h-[52rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
                            </div>
                            <div
                                class="bg-gradient-to-tl from-pink-50 via-pink-100 to-pink-50 blur-xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
                            </div>
                        </div>
                        <!-- End Gradients -->

                        <div class="relative z-10 h-full w-full">
                            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                                <div class="max-w-2xl text-center mx-auto my-20 lg:my-40">
                                    <!-- Title -->
                                    <div class="mt-5 max-w-xl text-center mx-auto">
                                        <h1
                                            class="block font-bold text-cyan-400 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                                            Bright <span class="text-yellow-300">Smile</span> Courier
                                        </h1>
                                    </div>
                                    <!-- End Title -->

                                    <div class="mt-5 max-w-3xl text-center mx-auto">
                                        <p class="text-xl text-white dark:text-gray-400">Every package with a smile :)
                                        </p>
                                    </div>

                                    <!-- Buttons -->
                                    <div
                                        class="mt-8 gap-3 flex justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110">
                                        <a class="inline-flex justify-center items-center gap-x-1 text-center bg-white hover:from-cyan-500 hover:to-cyan-600 border border-transparent text-cyan-500 text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-2 px-4 dark:focus:ring-offset-gray-800"
                                            :href="route('login')">

                                            Get Started
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                <polyline points="10 17 15 12 10 7"></polyline>
                                                <line x1="15" y1="12" x2="3" y2="12"></line>
                                            </svg>
                                        </a>
                                    </div>
                                    <!-- End Buttons -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero -->

                    <div
                        class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[340px] h-[340px] border border-dashed border-violet-200 rounded-full dark:border-violet-900/60">
                    </div>
                    <div
                        class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[575px] h-[575px] border border-dashed border-violet-200 rounded-full opacity-80 dark:border-violet-900/60">
                    </div>
                    <div
                        class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[840px] h-[840px] border border-dashed border-violet-200 rounded-full opacity-60 dark:border-violet-900/60">
                    </div>
                    <div
                        class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[1080px] h-[1080px] border border-dashed border-violet-200 rounded-full opacity-40 dark:border-violet-900/60">
                    </div>
                </div>
                <!-- End Hero -->
            </div>

            <!-- How it works -->
            <div id="how-it-works" class="relative bg-white w-full px-8 py-2 md:pt-6 lg:py-12 xl:py-20 xl:px-0">
                <div class="container flex mb-20 flex-col items-center justify-between h-full max-w-6xl mx-auto">
                    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px; transform: translateZ(0px);">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>

                    <h3
                        class="animate__animated animate__fadeInUp animate__delay-2s max-w-2xl px-5 text-3xl font-black leading-tight text-center text-pink-600 mt-8 sm:px-0 sm:text-6xl">
                        How it works</h3>
                    <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-5 lg:mt-10">

                        <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                            <div
                                class="relative flex flex-col items-center justify-center w-full lg:h-full p-8 lg:p-20 mr-5 rounded-lg">
                                <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path class=" hover:text-yellow-100"
                                                d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 1 -->
                                <img src="/img/bs_sign_up.png" alt="step 1" class="z-10 h-16" />
                                <h4 class="relative mt-6 text-lg font-bold text-cyan-400">Step 1</h4>
                                <p class="relative mt-2 text-base text-center text-gray-600">Sign up with Bright
                                    Smile
                                    Courier
                                    for
                                    free
                                    and get your personalized US shipping address and mailbox number</p>

                            </div>
                        </div>

                        <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                            <div
                                class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                                <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path class="hover:text-yellow-100"
                                                d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 2 -->
                                <img src="/img/bs_shopping_bag.png" alt="step 1" class="z-10 h-16" />
                                <h4 class="relative mt-6 text-lg font-bold text-yellow-300">Step 2</h4>
                                <p class="relative mt-2 text-base text-center text-gray-600">Shop at your favorite
                                    stores
                                    world-wide and send item(s) to your Bright Smile Courier shipping address OR
                                    have
                                    family/friends send
                                    packages to your Bright Smile Courier shipping address.</p>

                            </div>
                        </div>

                        <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                            <div
                                class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                                <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 378 410"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path class="hover:text-yellow-100"
                                                d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 3 -->
                                <img src="/img/bs_truck.png" alt="step 1" class="z-10 h-16" />
                                <h4 class="relative mt-6 text-lg font-bold text-pink-500">Step 3</h4>
                                <p class="relative mt-2 text-base text-center text-gray-600">Bright Smile Courier
                                    receives your
                                    package(s)
                                    at our US warehouse and notifies you, at which point you upload your invoice.
                                </p>
                            </div>
                        </div>

                    </div>
                    <h1 class="flex font-extrabold text-gray-900 text-3xl lg:text-[50pt]"><img
                            src="https://cdn-icons-png.flaticon.com/128/756/756940.png" alt="step 1"
                            class="z-10 h-20 animate-bounce" />Final
                        Step
                    </h1>
                    <p class="text-xl text-center font ">You will receive a <b class="text-pink-500">notification</b>
                        when your
                        package(s)
                        are ready
                        for Pickup or delivery.</p>
                </div>
            </div>

            <!-- Rates -->
            <div id="rates" class="max-w-[85rem] px-4 py-10 sm:px-2 lg:px-4 lg:py-14 mx-auto">
                <div class="relative md:p-8">
                    <!-- Grid -->
                    <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-4 lg:items-center">
                        <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-7 lg:order-2">
                            <h3
                                class="max-w-2xl px-5  text-3xl font-black leading-tight text-center text-pink-600 sm:mt-0 sm:px-0 sm:text-6xl">
                                OUR RATES</h3>

                            <!-- Tab Navs -->
                            <!-- Table Section -->
                            <div class="max-w- px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                                <!-- Card -->
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div
                                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                                <!-- Header -->
                                                <!-- <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                                        Cryptocurrency Prices by Market Cap
                                                    </h2>
                                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                                        The global cryptocurrency market cap today is $1.09 Trillion, a
                                                        <span class="text-green-500">0.5%</span> change in the last 24
                                                        hours.
                                                    </p>
                                                </div> -->
                                                <!-- End Header -->

                                                <!-- Table -->
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                    <thead class="bg-yellow-400 font-bold dark:bg-slate-800">
                                                        <tr>


                                                            <th scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap">
                                                                <span
                                                                    class="text-md text-center font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                                    Weight<br> <small></small>
                                                                </span>
                                                            </th>

                                                            <th scope="col"
                                                                class="px-6 py-3 text-start whitespace-nowrap">
                                                                <span
                                                                    class="text-md font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                                    Rates<br> <small>(JMD)</small>
                                                                </span>
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap">
                                                                <span
                                                                    class="text-md text-center font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                                    Weight<br> <small>(LBS)</small>
                                                                </span>
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap">
                                                                <span
                                                                    class="text-md font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                                    Weight<br> <small>(JMD)</small>
                                                                </span>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody
                                                        class="text-center divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">1</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$500</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">6</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$1,750</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">2</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$750</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">7</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$2,000</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">3</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$1000</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">8</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$2,250</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">4</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$1,250</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">9</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$2,500</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">5</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$1,500</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white">10</span>
                                                            </td>
                                                            <td class="size-px whitespace-nowrap px-6 py-3">
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500">$2,750</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- End Table -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Table Section -->
                            <!-- End Tab Navs -->
                        </div>
                        <!-- End Col -->

                        <div class="lg:col-span-5">
                            <div class="relative">
                                <!-- Tab Content -->
                                <div>
                                    <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                            src="https://images.pexels.com/photos/6347566/pexels-photo-6347566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                            alt="Image Description">
                                    </div>

                                    <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                        aria-labelledby="tabs-with-card-item-2">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                            src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                            alt="Image Description">
                                    </div>

                                    <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                        aria-labelledby="tabs-with-card-item-3">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                            src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <!-- End Tab Content -->

                                <!-- SVG Element -->
                                <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                                    <svg class="w-16 h-auto text-yellow-400" width="121" height="135"
                                        viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                        <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                        <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <!-- End SVG Element -->
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Background Color -->
                    <div class="absolute inset-0 grid grid-cols-12 size-full">
                        <div
                            class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]">
                        </div>
                    </div>
                    <!-- End Background Color -->
                </div>
            </div>
            <!-- End Rates -->

            <!-- About -->
            <section id="about-us" class="relative py-20 bg-white">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px);">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>

                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-20">
                    <p
                        class="max-w-2xl px-5  text-3xl font-extrabold text-center text-pink-500 sm:mt-0 sm:px-0 sm:text-6xl">
                        ABOUT US</p>

                </div>
                <!-- End Title -->
                <div class="container mx-auto px-4">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                            <img alt="..." class="max-w-full rounded-lg shadow-lg"
                                src="https://images.unsplash.com/photo-1577702312572-5bb9328a9f15?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        </div>
                        <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                            <div class="md:pr-12 mt-6 md:mt-0">
                                <div
                                    class="text-pink-60 p-3 text-center inline-flex items-center justify-center  mb-6 bg-pink-10">
                                    <!-- <i class="fas fa-rocket text-xl"></i> -->
                                    <img src="img/logo.png" alt="logo" />
                                </div>
                                <h3 class="text-3xl font-semibold">Bright Smile Courier</h3>
                                <p class="mt-4 text-lg leading-relaxed text-gray-600">Bright Smile is a courier
                                    company
                                    that
                                    offers a
                                    fast and reliable service model where all goods are delivered to customers or
                                    can be
                                    picked up
                                    at a convenient location. So no more long line wait to collect your packages.
                                </p>
                                <p class="text-lg leading-relaxed mt-2 text-gray-600">We also facilitate persons who
                                    don't have a
                                    credit card and need assistance shopping
                                    online.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY USE OUR SERVICE -->
            <div class="mx-auto h-80 w-full overflow-y-scroll bg-cover bg-fixed bg-center bg-no-repeat shadow-lg"
                style="background-image:url('https://images.pexels.com/photos/4246109/pexels-photo-4246109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
                <div class="mt-40">
                    <div class="bg-whit px-4 pb-16 sm:p-8">
                        <div class="font-inter text-6xl font-extrabold tracking-tight text-pink-600">
                            WHY USE OUR SERVICE
                        </div>
                        <p class="mt-4 leading-7 text-xl text-white">
                            At Bright Smile we are a fast and
                            reliable
                            shipping company that you can trust to deliver your packages safe and secure at a
                            low
                            rate.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Use our Credit card / Delivery Service -->
            <section class="pt-20 pb-32 bg-white">
                <div class="container mx-auto px-4">
                    <!-- <div class="flex flex-wrap justify-center text-center mb-24">
                        <div class="w-full lg:w-6/12 px-4">
                            <h1 class="text-4xl font-semibold text-pink-500">WHY USE OUR SERVICE</h1>
                            <p class="text-lg leading-relaxed m-4 text-gray-600">At Bright Smile we are a fast and
                                reliable
                                shipping company that you can trust to deliver your packages safe and secure at a
                                low
                                rate.</p>
                        </div>
                    </div> -->
                    <div class="grid lg:grid-cols-2 gap-4 pt-10">
                        <div>
                            <h1 class="text-4xl font-semibold text-yellow-400">USING OUR CREDIT CARD</h1>
                            <p class="text-lg leading-relaxed m-4 text-gray-600">Don't have a credit card? You may use ours at a one time processing fee of $1000 JMD. You may contact us via whatsapp or call us directly. We will place the order for you and you make the payment cash or online bank transfer.
                            </p>
                            <img src="img/cc-shopping.png" alt="credit card" />
                        </div>
                        <!-- ... -->
                        <div>
                            <h1 class="text-4xl text-cyan-400 font-semibold">DELIVERY SERVICE</h1>
                            <p class="text-lg leading-relaxed m-4 text-gray-600">Delivery will be done 2X per week
                                at
                                the
                                following locations.</p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                                <i class="fas fa-fingerprint"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Montego Bay Square</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                                <i class="fab fa-html5"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Falmouth Square</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                                <i class="far fa-paper-plane"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Knutsford Express</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="text-lg leading-relaxed m-4 text-gray-600">We also deliver at your door step
                                if
                                need be at an extra cost.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="relative block bg-gray-900">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px);">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4 lg:pt-20 lg:pb-14">
                    <div class="flex flex-wrap text-center justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl mt-10 font-semibold text-white">Connect with us</h2>
                            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">You may connect with us through
                                any of
                                our social media platforms listed below.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-12 justify-center">
                        <div class="lg:w-3/12 px-4 text-center">
                            <a href="https://www.instagram.com/brightsmile_courier/" target="_blank">
                                <div
                                    class="text-gray-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                    <img src="img/instagram.png">
                                </div>
                                <h6 class="text-xl mt-5 font-semibold text-white">Instagram</h6>
                                <p class="mt-2 mb-4 text-gray-500">Brightsmile_courier</p>
                            </a>
                        </div>
                        <div class="lg:w-3/12 px-4 text-center">
                            <a href="" target="_blank">
                                <div
                                    class="text-gray-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                    <img src="img/facebook.png">
                                </div>
                                <h5 class="text-xl mt-5 font-semibold text-white">Facebook</h5>
                                <p class="mt-2 mb-4 text-gray-500">Brightsmile_courier</p>
                            </a>
                        </div>
                        <div class="lg:w-3/12 px-4 text-center">
                            <a href="" target="_blank">
                                <div
                                    class="text-gray-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                    <img src="img/tiktok.png">
                                </div>
                                <h5 class="text-xl mt-5 font-semibold text-white">TikTok</h5>
                                <p class="mt-2 mb-4 text-gray-500">Brightsmile_courier</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <section class="relative block pt-2 lg:pt-0 bg-gray-900">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-8/12 px-4">

                            <div class="py-2 mr-2 bg-gray-100 dark:bg-gray-800 rounded-lg">
                                <div class="pl-4 lg:flex justify-center mx-auto">

                                    <div class="flex items-center mr-4 text-white-600 dark:text-gray-400">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 64 64"
                                            class="w-5 h-5 text-pink-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                d="M30.287 2.029A29.769 29.769 0 0 0 5.223 45.266L2.064 60.6a1.158 1.158 0 0 0 1.4 1.361L18.492 58.4A29.76 29.76 0 1 0 30.287 2.029zm17.931 46.2" />

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                                d="M46.184 38.205l-5.765-1.655a2.149 2.149 0 0 0-2.126.561l-1.41 1.436a2.1 2.1 0 0 1-2.283.482c-2.727-1.1-8.463-6.2-9.927-8.754a2.1 2.1 0 0 1 .166-2.328l1.23-1.592a2.148 2.148 0 0 0 .265-2.183l-2.424-5.485a2.149 2.149 0 0 0-3.356-.769c-1.609 1.361-3.517 3.428-3.749 5.719-.409 4.039 1.323 9.13 7.872 15.242 7.566 7.063 13.626 8 17.571 7.04 2.238-.542 4.026-2.714 5.154-4.493a2.15 2.15 0 0 0-1.218-3.221z" />

                                        </svg>
                                        <div class="ml-4 text-sm tracking-wide font-semibold w-60">
                                            +876 312-1067
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                            class="w-6 h-6 text-pink-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <div class="ml-4 text-sm tracking-wide font-semibold w-60">
                                            +876 319-4331
                                        </div>
                                    </div>


                                </div>
                                <div class="pl-4 pt-4 lg:flex justify-center">


                                    <div class="flex items-center mr-4 text-gray-600 dark:text-gray-400">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                            class="w-6 h-6 text-pink-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <div class="mr-5 ml-4 text-sm tracking-wide font-semibold w-60">
                                            Montego Bay, St James Jamaica
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3 text-gray-600 dark:text-gray-400">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                            class="w-6 h-6 text-pink-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <div class="ml-4 text-sm tracking-wide font-semibold w-60">
                                            brightsmile249@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="container max-w-7xl bg-gray-900 mx-auto mt-5 pb-5 sm:mt-12 grid gap-y- sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                    <div class="flex justify-between items-center">
                        <p class="text-sm ml-4 text-gray-400">© 2024 Bright Smile Courier. All rights reserved.</p>
                    </div>
                    <!-- End Col -->

                    <!-- Links -->
                    <div class="space-x-4 text-sm ms-4">
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">Terms</a>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">Privacy</a>
                    </div>
                    <!-- End Links -->
                </div>
            </section>

        </div>

    </div>
</template>
