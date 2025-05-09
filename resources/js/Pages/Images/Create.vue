<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
  title: '',
  image: null,
});

function handleFileUpload(e) {
  form.image = e.target.files[0];
}

function submit() {
  form.post(route('images.store'));
}
</script>

<template>
    <Head title="Upload Image" />

    <AuthenticatedLayout>
      <template #header>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500 tracking-tight">
          📤 Upload Image
        </h2>
      </template>

      <div class="py-12 bg-gradient-to-b from-blue-50 to-purple-50 min-h-screen">
        <div class="mx-auto max-w-4xl px-6">
          <div class="bg-white shadow-2xl rounded-2xl p-8 border border-purple-100 backdrop-blur-lg">
            <form @submit.prevent="submit" enctype="multipart/form-data" class="space-y-6">
              <div>
                <label class="block text-lg font-medium text-purple-700 mb-1">Title</label>
                <input
                  v-model="form.title"
                  type="text"
                  placeholder="Enter image title"
                  class="w-full px-4 py-2 border border-purple-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400"
                />
                <p v-if="form.errors.title" class="text-sm text-red-500 mt-1">{{ form.errors.title }}</p>
              </div>

              <div>
                <label class="block text-lg font-medium text-purple-700 mb-1">Choose Image</label>
                <input
                  @change="handleFileUpload"
                  type="file"
                  accept="image/*"
                  class="w-full px-3 py-2 border border-purple-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:border-0 file:rounded-lg file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200 transition"
                />
                <p v-if="form.errors.image" class="text-sm text-red-500 mt-1">{{ form.errors.image }}</p>
              </div>

              <div class="text-center">
                <button
                  type="submit"
                  class="bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold px-6 py-2 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all"
                >
                  🚀 Upload Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>
