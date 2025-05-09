<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Welcome" />

  <AuthenticatedLayout>
    <template #header>
      <div class="text-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-6 rounded-md shadow-md">
        <h2 class="text-4xl font-extrabold text-white tracking-widest drop-shadow-md">
          Welcome
        </h2>
      </div>
    </template>

    <div class="py-12 bg-gradient-to-b from-gray-100 via-white to-gray-100 min-h-screen">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-2xl rounded-3xl p-12 border-l-8 border-indigo-400 transition duration-300 ease-in-out hover:scale-[1.01]">
          <div class="text-center space-y-6">
            <h3 class="text-3xl font-bold text-purple-700 drop-shadow-md">
              🚀 Hello, this is our project!
            </h3>
            <p class="text-gray-600 text-lg">
              We're thrilled to showcase what we've built using
              <span class="text-indigo-600 font-semibold">Laravel</span> and
              <span class="text-pink-600 font-semibold">Inertia.js</span>.
            </p>
            <div class="mt-8">
              <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-6 py-2 rounded-full shadow-lg hover:from-pink-600 hover:to-purple-700 transition-all">
                🔍 Upload Your Images Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
