<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";

const showingNavigationDropdown = ref(false);

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Bright Smile Courier" />

    <div
        class="relative overflow-hidden sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white-200 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div class="w-full mx-auto">
            <div class="overflow-hidden">
               

                <!-- Hero -->
                <div
                    class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2"
                >
                 <!-- ========== HEADER ========== -->
                 <header
                    class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm"
                >
                    <nav
                        class="mt-4 relative max-w-2xl w-full bg-white border border-gray-200 rounded-[2rem] mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto dark:bg-neutral-900 dark:border-neutral-700"
                    >
                        <div
                            class="px-4 md:px-0 flex justify-between items-center"
                        >
                            <!-- Logo -->
                            <div>
                                <a
                                    class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                                    href="../templates/personal/index.html"
                                    aria-label="Preline"
                                >
                                    <svg
                                        class="w-24 h-auto"
                                        width="116"
                                        height="32"
                                        viewBox="0 0 116 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z"
                                            class="fill-gray-800 dark:fill-white"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12"
                                            class="stroke-gray-800 dark:stroke-white"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        />
                                        <path
                                            d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12"
                                            class="stroke-gray-800 dark:stroke-white"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        />
                                        <circle
                                            cx="13"
                                            cy="16.5214"
                                            r="5"
                                            class="fill-gray-800 dark:fill-white"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="md:hidden">
                                <!-- Toggle Button -->
                                <button
                                    type="button"
                                    class="hs-collapse-toggle flex justify-center items-center size-6 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                    id="hs-navbar-header-floating-collapse"
                                    aria-expanded="false"
                                    aria-controls="hs-navbar-header-floating"
                                    aria-label="Toggle navigation"
                                    data-hs-collapse="#hs-navbar-header-floating"
                                >
                                    <svg
                                        class="hs-collapse-open:hidden shrink-0 size-3.5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <line x1="3" x2="21" y1="6" y2="6" />
                                        <line x1="3" x2="21" y1="12" y2="12" />
                                        <line x1="3" x2="21" y1="18" y2="18" />
                                    </svg>
                                    <svg
                                        class="hs-collapse-open:block hidden shrink-0 size-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                    </svg>
                                </button>
                                <!-- End Toggle Button -->
                            </div>
                        </div>

                        <div
                            id="hs-navbar-header-floating"
                            class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block"
                            aria-labelledby="hs-navbar-header-floating-collapse"
                        >
                            <div
                                class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7"
                            >
                                <a
                                    class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-gray-800 font-medium text-gray-800 focus:outline-none dark:border-neutral-200 dark:text-neutral-200"
                                    :href="route('product')"
                                    aria-current="page"
                                    >Product</a
                                >
                                <a
                                    class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200"
                                    :href="route('pricing')"
                                    >Pricing</a
                                >
                                <div class="hidden sm:flex sm:items-center ">
                                <!-- Settings Dropdown -->
                                <div class="relative">
                                    <div class=" sm:top-0 sm:right-0  text-end">
                                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                                            class="py-1.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-white text-cyan-500 hover:bg-cyan-500 hover:text-white disabled:opacity- disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            class="css-i6dzq1">
                                            <line x1="18" y1="20" x2="18" y2="10"></line>
                                            <line x1="12" y1="20" x2="12" y2="4"></line>
                                            <line x1="6" y1="20" x2="6" y2="14"></line>
                                        </svg>Dashboard
                                        </Link>

                                        <template v-else>
                                            <Link :href="route('login')"
                                                class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-white text-cyan-500 hover:bg-cyan-500 hover:text-white disabled:opacity- disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white">
                                            Log in<svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                <polyline points="10 17 15 12 10 7"></polyline>
                                                <line x1="15" y1="12" x2="3" y2="12"></line>
                                            </svg></Link>

                                            <Link :href="route('register')"
                                                class="ms-4 font-semibold text-orange-400 hover:text-pink-600 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            Register</Link>
                                        </template>
                                    </div>
                                </div>
                            </div>
                                <!-- <a
                                    class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200"
                                    href="#"
                                    >Articles</a
                                > -->
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- ========== END HEADER ========== -->
                    <div
                        class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10"
                    >
                        <!-- Announcement Banner -->
                        <div class="flex justify-center">
                            <a
                                class="inline-flex items-center gap-x-2 bg-white border border-purple-800 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 focus:outline-none focus:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
                                href="#"
                            >
                                PRO release - Join to waitlist
                                <span
                                    class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-neutral-700 dark:text-neutral-400"
                                >
                                    <svg
                                        class="shrink-0 size-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <!-- End Announcement Banner -->

                        <!-- Title -->
                        <div class="mt-5 max-w-2xl text-center mx-auto">
                            <h1
                                class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200"
                            >
                                Let's Build
                                <span
                                    class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent"
                                    >Together</span
                                >
                            </h1>
                        </div>
                        <!-- End Title -->

                        <div class="mt-5 max-w-3xl text-center mx-auto">
                            <p
                                class="text-lg text-gray-600 dark:text-neutral-400"
                            >
                                Preline UI is an open-source set of prebuilt UI
                                components, ready-to-use examples and Figma
                                design system based on the utility-first
                                Tailwind CSS framework.
                            </p>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-8 gap-3 flex justify-center">
                            <a
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:from-violet-600 focus:to-blue-600 py-3 px-4"
                                href="#"
                            >
                                Get started
                                <svg
                                    class="shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                            <button
                                type="button"
                                class="relative group p-2 ps-3 inline-flex items-center gap-x-2 text-sm font-mono rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            >
                                $ npm i preline
                                <span
                                    class="flex justify-center items-center bg-gray-200 rounded-md size-7 dark:bg-neutral-700 dark:text-neutral-400"
                                >
                                    <svg
                                        class="shrink-0 size-4 group-hover:rotate-6 transition"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <rect
                                            width="8"
                                            height="4"
                                            x="8"
                                            y="2"
                                            rx="1"
                                            ry="1"
                                        />
                                        <path
                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"
                                        />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <!-- End Buttons -->

                        <div
                            class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3"
                        >
                            <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                >Package Manager:</span
                            >
                            <span
                                class="text-sm font-bold text-gray-900 dark:text-white"
                                >npm</span
                            >
                            <svg
                                class="size-5 text-gray-300 dark:text-neutral-600"
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true"
                            >
                                <path
                                    d="M6 13L10 3"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                />
                            </svg>
                            <a
                                class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                href="#"
                            >
                                Installation Guide
                                <svg
                                    class="shrink-0 size-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Hero -->
            </div>
            

            <!-- How it works -->
            <div
                id="how-it-works"
                class="relative bg-white w-full px-8 py-2 md:pt-6 lg:py-12 xl:py-20 xl:px-0"
            >
                <div
                    class="container flex mb-20 flex-col items-center justify-between h-full max-w-6xl mx-auto"
                >
                    <div
                        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                        style="height: 80px; transform: translateZ(0px)"
                    >
                        <svg
                            class="absolute bottom-0 overflow-hidden"
                            xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none"
                            version="1.1"
                            viewBox="0 0 2560 100"
                            x="0"
                            y="0"
                        >
                            <polygon
                                class="text-white fill-current"
                                points="2560 0 2560 100 0 100"
                            ></polygon>
                        </svg>
                    </div>

                    <h3
                        class="animate__animated animate__fadeInUp animate__delay-2s max-w-2xl px-5 text-3xl font-black leading-tight text-center text-pink-600 mt-8 sm:px-0 sm:text-6xl"
                    >
                        How it works
                    </h3>
                    <div
                        class="flex flex-col w-full mt-0 lg:flex-row sm:mt-5 lg:mt-10"
                    >
                        <div
                            class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3"
                        >
                            <div
                                class="relative flex flex-col items-center justify-center w-full lg:h-full p-8 lg:p-20 mr-5 rounded-lg"
                            >
                                <svg
                                    class="absolute w-full h-full text-gray-100 fill-current"
                                    viewBox="0 0 377 340"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g>
                                        <g>
                                            <path
                                                class="hover:text-yellow-100"
                                                d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 1 -->
                                <img
                                    src="/img/bs_sign_up.png"
                                    alt="step 1"
                                    class="z-10 h-16"
                                />
                                <h4
                                    class="relative mt-6 text-lg font-bold text-cyan-400"
                                >
                                    Step 1
                                </h4>
                                <p
                                    class="relative mt-2 text-base text-center text-gray-600"
                                >
                                    Sign up with Bright Smile Courier for free
                                    and get your personalized US shipping
                                    address and mailbox number
                                </p>
                            </div>
                        </div>

                        <div
                            class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3"
                        >
                            <div
                                class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg"
                            >
                                <svg
                                    class="absolute w-full h-full text-gray-100 fill-current"
                                    viewBox="0 0 358 372"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g>
                                        <g>
                                            <path
                                                class="hover:text-yellow-100"
                                                d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 2 -->
                                <img
                                    src="/img/bs_shopping_bag.png"
                                    alt="step 1"
                                    class="z-10 h-16"
                                />
                                <h4
                                    class="relative mt-6 text-lg font-bold text-yellow-300"
                                >
                                    Step 2
                                </h4>
                                <p
                                    class="relative mt-2 text-base text-center text-gray-600"
                                >
                                    Shop at your favorite stores world-wide and
                                    send item(s) to your Bright Smile Courier
                                    shipping address OR have family/friends send
                                    packages to your Bright Smile Courier
                                    shipping address.
                                </p>
                            </div>
                        </div>

                        <div
                            class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3"
                        >
                            <div
                                class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg"
                            >
                                <svg
                                    class="absolute w-full h-full text-gray-100 fill-current"
                                    viewBox="0 0 378 410"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g>
                                        <g>
                                            <path
                                                class="hover:text-yellow-100"
                                                d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z"
                                            ></path>
                                        </g>
                                    </g>
                                </svg>
                                <!-- FEATURE Icon 3 -->
                                <img
                                    src="/img/bs_truck.png"
                                    alt="step 1"
                                    class="z-10 h-16"
                                />
                                <h4
                                    class="relative mt-6 text-lg font-bold text-pink-500"
                                >
                                    Step 3
                                </h4>
                                <p
                                    class="relative mt-2 text-base text-center text-gray-600"
                                >
                                    Bright Smile Courier receives your
                                    package(s) at our US warehouse and notifies
                                    you, at which point you upload your invoice.
                                </p>
                            </div>
                        </div>
                    </div>
                    <h1
                        class="flex font-extrabold text-gray-900 text-3xl lg:text-[50pt]"
                    >
                        <img
                            src="https://cdn-icons-png.flaticon.com/128/756/756940.png"
                            alt="step 1"
                            class="z-10 h-20 animate-bounce"
                        />Final Step
                    </h1>
                    <p class="text-xl text-center font">
                        You will receive a
                        <b class="text-pink-500">notification</b> when your
                        package(s) are ready for Pickup or delivery.
                    </p>
                </div>
            </div>

            <!-- Rates -->
            <div
                id="rates"
                class="max-w-[85rem] px-4 py-10 sm:px-2 lg:px-4 lg:py-14 mx-auto"
            >
                <div class="relative md:p-8">
                    <!-- Grid -->
                    <div
                        class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-4 lg:items-center"
                    >
                        <div
                            class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-7 lg:order-2"
                        >
                            <h3
                                class="max-w-2xl px-5 text-3xl font-black leading-tight text-center text-pink-600 sm:mt-0 sm:px-0 sm:text-6xl"
                            >
                                OUR RATES
                            </h3>

                            <!-- Table Section -->
                            <div
                                class="max-w- px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto"
                            >
                                <!-- Card -->
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div
                                            class="p-1.5 min-w-full inline-block align-middle"
                                        >
                                            <div
                                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700"
                                            >
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
                                                <table
                                                    class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"
                                                >
                                                    <thead
                                                        class="bg-yellow-400 font-bold dark:bg-slate-800"
                                                    >
                                                        <tr>
                                                            <th
                                                                scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap"
                                                            >
                                                                <span
                                                                    class="text-md text-center font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200"
                                                                >
                                                                    Weight<br />
                                                                    <small></small>
                                                                </span>
                                                            </th>

                                                            <th
                                                                scope="col"
                                                                class="px-6 py-3 text-start whitespace-nowrap"
                                                            >
                                                                <span
                                                                    class="text-md font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200"
                                                                >
                                                                    Rates<br />
                                                                    <small
                                                                        >(JMD)</small
                                                                    >
                                                                </span>
                                                            </th>
                                                            <th
                                                                scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap"
                                                            >
                                                                <span
                                                                    class="text-md text-center font-bold uppercase tracking-wide text-gray-800 dark:text-gray-200"
                                                                >
                                                                    Weight<br />
                                                                    <small
                                                                        >(LBS)</small
                                                                    >
                                                                </span>
                                                            </th>
                                                            <th
                                                                scope="col"
                                                                class="px-6 py-3 text-center whitespace-nowrap"
                                                            >
                                                                <span
                                                                    class="text-md font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200"
                                                                >
                                                                    Weight<br />
                                                                    <small
                                                                        >(JMD)</small
                                                                    >
                                                                </span>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody
                                                        class="text-center divide-y divide-gray-200 dark:divide-gray-700"
                                                    >
                                                        <tr>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >1</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$500</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >6</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$1,750</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >2</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$750</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >7</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$2,000</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >3</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$1000</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >8</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$2,250</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >4</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$1,250</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >9</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$2,500</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >5</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$1,500</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg text-gray-800 dark:text-white"
                                                                    >10</span
                                                                >
                                                            </td>
                                                            <td
                                                                class="size-px whitespace-nowrap px-6 py-3"
                                                            >
                                                                <span
                                                                    class="text-lg font-extrabold text-pink-500"
                                                                    >$2,750</span
                                                                >
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
                        </div>
                        <!-- End Col -->

                        <div class="lg:col-span-5">
                            <div class="relative">
                                <!-- Tab Content -->
                                <div class="p-10">
                                    <div class="lg:h-[500px]">
                                        <img
                                            class="h-[100%] mx-auto shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]"
                                            src="https://images.pexels.com/photos/6347566/pexels-photo-6347566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                            alt="Image Description"
                                        />
                                    </div>
                                </div>
                                <!-- End Tab Content -->

                                <!-- SVG Element -->
                                <div
                                    class="hidden absolute top-0 right-20 end-0 translate-x-20 md:block lg:translate-x-20"
                                >
                                    <svg
                                        class="w-16 h-auto text-yellow-400"
                                        width="121"
                                        height="135"
                                        viewBox="0 0 121 135"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
                                        <path
                                            d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
                                        <path
                                            d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                            stroke="currentColor"
                                            stroke-width="10"
                                            stroke-linecap="round"
                                        />
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
                            class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]"
                        ></div>
                    </div>
                    <!-- End Background Color -->
                </div>
            </div>
            <!-- End Rates -->

            <!-- About -->
            <section id="about-us" class="relative py-20 bg-white">
                <div
                    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px)"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-white fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>

                <!-- Title -->
                <div class="max-w-2xl mx-auto text-center mb-20">
                    <p
                        class="max-w-2xl px-5 text-3xl font-extrabold text-center text-pink-500 sm:mt-0 sm:px-0 sm:text-6xl"
                    >
                        ABOUT US
                    </p>
                </div>
                <!-- End Title -->
                <div class="container mx-auto px-4">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                            <img
                                alt="..."
                                class="max-w-full rounded-lg shadow-lg"
                                src="https://images.unsplash.com/photo-1577702312572-5bb9328a9f15?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            />
                        </div>
                        <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                            <div class="md:pr-12 mt-6 md:mt-0">
                                <div
                                    class="text-pink-60 p-3 text-center inline-flex items-center justify-center mb-6 bg-pink-10"
                                >
                                    <!-- <i class="fas fa-rocket text-xl"></i> -->
                                    <img src="img/logo.png" alt="logo" />
                                </div>
                                <h3 class="text-3xl font-semibold">
                                    Bright Smile Courier
                                </h3>
                                <p
                                    class="mt-4 text-lg leading-relaxed text-gray-600"
                                >
                                    Bright Smile is a courier company that
                                    offers a fast and reliable service model
                                    where all goods are delivered to customers
                                    or can be picked up at a convenient
                                    location. So no more long line wait to
                                    collect your packages.
                                </p>
                                <p
                                    class="text-lg leading-relaxed mt-2 text-gray-600"
                                >
                                    We also facilitate persons who don't have a
                                    credit card and need assistance shopping
                                    online.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY USE OUR SERVICE -->
            <div
                class="mx-auto h-80 w-full overflow-y-scroll bg-cover bg-fixed bg-center bg-no-repeat shadow-lg"
                style="
                    background-image: url('https://images.pexels.com/photos/4246109/pexels-photo-4246109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                "
            >
                <div class="mt-40">
                    <div class="bg-whit px-4 pb-16 sm:p-8">
                        <div
                            class="font-inter text-6xl font-extrabold tracking-tight text-pink-600"
                        >
                            WHY USE OUR SERVICE
                        </div>
                        <p class="mt-4 leading-7 text-xl text-white">
                            At Bright Smile we are a fast and reliable shipping
                            company that you can trust to deliver your packages
                            safe and secure at a low rate.
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
                            <h1 class="text-4xl font-semibold text-yellow-400">
                                USING OUR CREDIT CARD
                            </h1>
                            <p
                                class="text-lg leading-relaxed m-4 text-gray-600"
                            >
                                Don't have a credit card? You may use ours at a
                                one time processing fee of $1000 JMD. You may
                                contact us via whatsapp or call us directly. We
                                will place the order for you and you make the
                                payment cash or online bank transfer.
                            </p>
                            <img src="img/cc-shopping.png" alt="credit card" />
                        </div>
                        <!-- ... -->
                        <div>
                            <h1 class="text-4xl text-cyan-400 font-semibold">
                                DELIVERY SERVICE
                            </h1>
                            <p
                                class="text-lg leading-relaxed m-4 text-gray-600"
                            >
                                Delivery will be done 2X per week at the
                                following locations.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                            >
                                                <i
                                                    class="fas fa-fingerprint"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Montego Bay Square
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                            >
                                                <i class="fab fa-html5"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Falmouth Square
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                            >
                                                <i
                                                    class="far fa-paper-plane"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Knutsford Express
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p
                                class="text-lg leading-relaxed m-4 text-gray-600"
                            >
                                We also deliver at your door step if need be at
                                an extra cost.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="relative block bg-slate-900">
                <div
                    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px)"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-slate-900 fill-current"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4 lg:pt-20 lg:pb-14">
                    <div class="flex flex-wrap text-center justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl mt-10 font-semibold text-white">
                                Connect with us
                            </h2>
                            <p
                                class="text-lg leading-relaxed mt-4 mb-4 text-gray-500"
                            >
                                You may connect with us through any of our
                                social media platforms listed below.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-12 justify-center">
                        <div class="lg:w-3/12 px-4 text-center">
                            <a
                                href="https://www.instagram.com/brightsmile_courier/"
                                target="_blank"
                            >
                                <div
                                    class="text-slate-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                                >
                                    <img src="img/instagram.png" />
                                </div>
                                <h6
                                    class="text-xl mt-5 font-semibold text-white"
                                >
                                    Instagram
                                </h6>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Brightsmile_courier
                                </p>
                            </a>
                        </div>
                        <div class="lg:w-3/12 px-4 text-center">
                            <a href="" target="_blank">
                                <div
                                    class="text-slate-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                                >
                                    <img src="img/facebook.png" />
                                </div>
                                <h5
                                    class="text-xl mt-5 font-semibold text-white"
                                >
                                    Facebook
                                </h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Brightsmile_courier
                                </p>
                            </a>
                        </div>
                        <div class="lg:w-3/12 px-4 text-center">
                            <a href="" target="_blank">
                                <div
                                    class="text-slate-900 p-1 w-14 h-14 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                                >
                                    <img src="img/tiktok.png" />
                                </div>
                                <h5
                                    class="text-xl mt-5 font-semibold text-white"
                                >
                                    TikTok
                                </h5>
                                <p class="mt-2 mb-4 text-gray-500">
                                    Brightsmile_courier
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <section class="relative block pt-2 lg:pt-0 bg-slate-900">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:max-w-6xl px-4">
                            <div
                                class="py-2 bg-gray-100 dark:bg-gray-800 rounded-lg"
                            >
                                <div
                                    class="grid grid-cols-3 gap-4 lg:flex items-center justify-center mx-auto"
                                >
                                    <div
                                        class="flex items-center mr-4 text-white-600 dark:text-gray-400"
                                    >
                                        <svg
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 64 64"
                                            class="w-7 h-7 text-pink-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="4"
                                                d="M30.287 2.029A29.769 29.769 0 0 0 5.223 45.266L2.064 60.6a1.158 1.158 0 0 0 1.4 1.361L18.492 58.4A29.76 29.76 0 1 0 30.287 2.029zm17.931 46.2"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="4"
                                                d="M46.184 38.205l-5.765-1.655a2.149 2.149 0 0 0-2.126.561l-1.41 1.436a2.1 2.1 0 0 1-2.283.482c-2.727-1.1-8.463-6.2-9.927-8.754a2.1 2.1 0 0 1 .166-2.328l1.23-1.592a2.148 2.148 0 0 0 .265-2.183l-2.424-5.485a2.149 2.149 0 0 0-3.356-.769c-1.609 1.361-3.517 3.428-3.749 5.719-.409 4.039 1.323 9.13 7.872 15.242 7.566 7.063 13.626 8 17.571 7.04 2.238-.542 4.026-2.714 5.154-4.493a2.15 2.15 0 0 0-1.218-3.221z"
                                            />
                                        </svg>
                                        <div
                                            class="ml-4 text-md tracking-wide font-semibold w-60"
                                        >
                                            +876 312-1067
                                        </div>
                                    </div>

                                    <div
                                        class="flex items-center mr-4 text-gray-600 dark:text-gray-400"
                                    >
                                        <svg
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            viewBox="0 0 24 24"
                                            class="w-8 h-8 text-pink-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                            />
                                        </svg>
                                        <div
                                            class="mr-5 ml-4 text-md tracking-wide font-semibold w-60"
                                        >
                                            Montego Bay, Jamaica
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center mt-3 text-gray-600 dark:text-gray-400"
                                    >
                                        <svg
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            viewBox="0 0 24 24"
                                            class="w-8 h-8 text-pink-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            />
                                        </svg>
                                        <div
                                            class="ml-4 text-md tracking-wide font-semibold w-60"
                                        >
                                            brightsmile249@gmail.com
                                        </div>
                                    </div>

                                    <!-- <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                            class="w-6 h-6 text-pink-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <div class="ml-4 text-sm tracking-wide font-semibold w-60">
                                            +876 319-4331
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="container max-w-7xl bg-gray-900 mx-auto mt-5 pb-5 sm:mt-12 grid gap-y- sm:gap-y-0 sm:flex sm:justify-between sm:items-center"
                >
                    <div class="flex justify-between items-center">
                        <p class="text-sm ml-4 text-gray-400">
                            © 2024 Bright Smile Courier. All rights reserved.
                        </p>
                    </div>
                    <!-- End Col -->

                    <!-- Links -->
                    <div class="space-x-4 text-sm ms-4">
                        <a
                            class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#"
                            >Terms</a
                        >
                        <a
                            class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#"
                            >Privacy</a
                        >
                    </div>
                    <!-- End Links -->
                </div>
            </section>
        </div>
    </div>
</template>
