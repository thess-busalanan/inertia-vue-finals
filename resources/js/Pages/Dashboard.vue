<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
  <Head title="Welcome" />

  <AuthenticatedLayout>
    <template #header>
      <div class="text-center">
        <h2 class="text-3xl font-semibold leading-tight text-gray-900 tracking-wide">
          Welcome
        </h2>
      </div>
    </template>

    <div class="py-12 bg-gray-50">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-10">
          <div class="text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">
              Hello, this is our project!
            </h3>
            <p class="text-gray-600 text-lg">
              We're excited to share what we've built with Laravel & Inertia.
            </p>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
