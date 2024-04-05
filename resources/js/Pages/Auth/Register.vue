<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const first_name = ref('');
const last_name = ref('');
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    trn: '',
    phone: '',
    address: '',
    city: '',
    parish: '',
});

const submit = () => {
    form.name = first_name.value + ' ' + last_name.value
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <div class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full py-10">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <a href="/" class="relative top-8 left-8">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </a>
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="flex justify-center">
                                    <!-- <Link href="/">
                                    <ApplicationLogo class="h-20 fill-current text-gray-500" />
                                    </Link> -->
                                </div>

                                <h1 class="text-3xl pb-4 text-cyan-400 animate__animated animate__rubberBand">Register
                                    for a new account
                                </h1>

                                <form @submit.prevent="submit">
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <InputLabel for="first_name" value="First Name" />

                                            <TextInput id="first_name" type="text" class="mt-1 block w-full"
                                                v-model="first_name" required autofocus autocomplete="first_name" />

                                            <InputError class="mt-2" :message="form.errors.name" />
                                        </div>
                                        <div class="sm:col-span-3">
                                            <InputLabel for="last_name" value="Last Name" />

                                            <TextInput id="last_name" type="text" class="mt-1 block w-full"
                                                v-model="last_name" required autofocus autocomplete="last_name" />

                                            <!-- <InputError class="mt-2" :message="form.errors." /> -->
                                        </div>

                                        <div class="sm:col-span-6">
                                            <InputLabel for="email" value="Email" />

                                            <TextInput id="email" type="email" class="mt-1 block w-full"
                                                v-model="form.email" required autocomplete="username" />

                                            <InputError class="mt-2" :message="form.errors.email" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="password" value="Password" />

                                            <TextInput id="password" type="password" class="mt-1 block w-full"
                                                v-model="form.password" required autocomplete="new-password" />

                                            <InputError class="mt-2" :message="form.errors.password" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="password_confirmation" value="Confirm Password" />

                                            <TextInput id="password_confirmation" type="password"
                                                class="mt-1 block w-full" v-model="form.password_confirmation" required
                                                autocomplete="new-password" />

                                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="trn" value="TRN" />

                                            <TextInput id="trn" type="text" class="mt-1 block w-full" v-model="form.trn"
                                                required autofocus autocomplete="trn" />

                                            <InputError class="mt-2" :message="form.errors.trn" />
                                        </div>

                                        <div class="sm:col-span-3">
                                            <InputLabel for="phone" value="Contact Number" />

                                            <TextInput id="phone" type="text" class="mt-1 block w-full"
                                                v-model="form.phone" required autofocus autocomplete="phone" />

                                            <InputError class="mt-2" :message="form.errors.phone" />
                                        </div>

                                        <div class="sm:col-span-6 border-t mt-4 pt-4">
                                            <InputLabel for="address" value="Address" />

                                            <TextInput id="address" type="text" class="mt-1 block w-full"
                                                v-model="form.address" required autofocus autocomplete="address" />

                                            <InputError class="mt-2" :message="form.errors.address" />
                                        </div>




                                        <div class="sm:col-span-3">
                                            <InputLabel for="city" value="City" />

                                            <TextInput id="city" type="text" class="mt-1 block w-full"
                                                v-model="form.city" required autofocus autocomplete="city" />

                                            <InputError class="mt-2" :message="form.errors.city" />
                                        </div>
                                        <div class="sm:col-span-3">


                                            <InputError class="mt-2" :message="form.errors.parish" />

                                            <label for="parish"
                                                class="block text-sm font-medium leading-6 text-gray-900">Parish</label>
                                            <select id="parish" name="parish" v-model="form.parish"
                                                class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                required autofocus autocomplete="parish">
                                                <option value="St James">St James</option>
                                                <option value="Trelawny">Trelawny</option>
                                                <option value="St. Ann">St. Ann</option>
                                                <option value="Hanover">Hanover</option>
                                                <option value="Westmoreland">Westmoreland</option>
                                                <option value="St. Elizabeth">St. Elizabeth</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Clarendon">Clarendon</option>
                                                <option value="St. Catherine">St. Catherine</option>
                                                <option value="Kingston">Kingston</option>
                                                <option value="St. Andrew">St. Andrew</option>
                                                <option value="St Thomas">St Thomas</option>
                                                <option value="Portland">Portland</option>
                                                <option value="St. Mary">St. Mary</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <Link :href="route('login')"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Already registered?
                                        </Link>

                                        <PrimaryButton class="ms-4 bg-cyan-400 hover:bg-cyan-600"
                                            :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            Register
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
