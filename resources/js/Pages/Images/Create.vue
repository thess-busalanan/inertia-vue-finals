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
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Upload Image
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
          <form @submit.prevent="submit" enctype="multipart/form-data" class="space-y-4">
            <div>
              <label>Title:</label>
              <input v-model="form.title" type="text" class="border p-1 w-full" />
              <div v-if="form.errors.title" class="text-red-500">{{ form.errors.title }}</div>
            </div>
            <div>
              <label>Image:</label>
              <input @change="handleFileUpload" type="file" class="w-full" />
              <div v-if="form.errors.image" class="text-red-500">{{ form.errors.image }}</div>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
