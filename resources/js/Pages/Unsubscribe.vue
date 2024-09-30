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


</script>




<template>

    <Head title="Welcome" />
  
        <!-- component -->
<div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-gradient-to-l from-fuchsia-500 via-pink-600 to-red-700 bg-opacity-50 py-10">
  <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
    <div class="w-full">
      <div class="m-8 my-20 max-w-[400px] mx-auto">
        <div class="mb-8">
          <h1 class="mb-4 text-5xl font-bold text-center text-green-600">Unsubscribed Successfully!</h1>
          <p class="text-gray-600 text-center">You will no longer receive emails from us going forward.</p>
        </div>
        <div class="space-y-4">
            <img src="img/logo.png" alt="Mail Image" class="mx-auto mb-5">
        </div>
      </div>
    </div>
  </div>
</div>

</template>