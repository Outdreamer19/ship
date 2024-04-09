<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Reset Password" />

        <div class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">

                        <!-- Left column container-->
                        <div class="pb-6 pt-3 px-4 md:px-0 lg:w-6/12">
                            <a href="/" class="lg:relative  lg:top-10 lg:left-10">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </a>
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <!-- <Link href="/">
                                    <ApplicationLogo class="h-20 fill-current text-gray-500" />
                                    </Link> -->
                                    <h1 class="text-3xl font-bold text-cyan-400 animate__animated animate__rubberBand">
                                        Reset Password
                                    </h1>



                                </div>

                                <div v-if="status" class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ status }}
                                </div>
                                <form @submit.prevent="submit">
                                    <div>
                                        <InputLabel for="email" value="Email" />

                                        <TextInput id="email" type="email" class="mt-1 block w-full"
                                            v-model="form.email" required autofocus autocomplete="username" />

                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>

                                    <div class="mt-4">
                                        <InputLabel for="password" value="Password" />

                                        <TextInput id="password" type="password" class="mt-1 block w-full"
                                            v-model="form.password" required autocomplete="new-password" />

                                        <InputError class="mt-2" :message="form.errors.password" />
                                    </div>

                                    <div class="mt-4">
                                        <InputLabel for="password_confirmation" value="Confirm Password" />

                                        <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                                            v-model="form.password_confirmation" required autocomplete="new-password" />

                                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                            :disabled="form.processing" class="bg-cyan-500 hover:bg-cyan-600">
                                            Reset Password
                                        </PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right column container with background and description-->
                        <div
                            class="flex items-center rounded-b-lg lg:w-1/2 lg:rounded-e-lg lg:rounded-bl-none bg-gradient-to-r from-blue-200 to-cyan-200">
                            <div class="w-full px-4 py-6 text-white text-center md:mx-6 md:p-12">
                                <img src="/img/logo.png" alt="logo" class="mx-auto mb-5">
                                <!-- <p class="text-4xl font-bold text-pink-400">Bright Smile Courier</p> -->
                                <h4 class="my-1 font-serif text-lg font-semibold">
                                    We are more than just a company
                                </h4>
                                <p class="text-3xl text-pink-400 font-serif">
                                    We are your family
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </GuestLayout>
</template>
