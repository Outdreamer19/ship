<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>

    <section class="gradient-form flex min-h-screen bg-neutral-50 dark:bg-neutral-700">
        <div class="container h-full p-4 mx-auto m-auto">

            <slot />
        </div>
    </section>
</template>
