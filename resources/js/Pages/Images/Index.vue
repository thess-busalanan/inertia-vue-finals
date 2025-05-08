<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({ images: Object });
</script>

<template>
  <Head title="Uploaded Images" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Uploaded Images
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
          <div v-for="image in images.data" :key="image.id" class="mb-4">
            <h2 class="font-semibold">{{ image.title }}</h2>
            <img :src="`/storage/${image.file_path}`" alt="Image" class="w-48 rounded" />
          </div>

          <!-- Pagination -->
          <div class="mt-6 flex space-x-2">
            <Link v-if="images.prev_page_url" :href="images.prev_page_url" class="text-blue-500 hover:underline">Previous</Link>
            <span>Page {{ images.current_page }} of {{ images.last_page }}</span>
            <Link v-if="images.next_page_url" :href="images.next_page_url" class="text-blue-500 hover:underline">Next</Link>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
