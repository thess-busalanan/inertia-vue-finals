<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({ images: Object });
</script>

<template>
  <Head title="Uploaded Images" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-4xl font-bold text-fuchsia-600 tracking-widest border-b-4 border-sky-300 pb-2">
        🌟 Uploaded Images
      </h2>
    </template>

    <div class="py-12 bg-gradient-to-br from-pink-100 via-sky-100 to-purple-100 min-h-screen">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-2xl sm:rounded-3xl p-10 ring-2 ring-fuchsia-200">
          <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
              v-for="image in images.data"
              :key="image.id"
              class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 border border-purple-300 hover:scale-105 transform p-4"
            >
              <img
                :src="`/storage/${image.file_path}`"
                alt="Image"
                class="w-full h-48 object-cover rounded-lg border-4 border-fuchsia-300"
              />
              <h2 class="mt-3 text-center font-bold text-violet-700 text-lg drop-shadow-md">
                {{ image.title }}
              </h2>
            </div>
          </div>

          <!-- Pagination -->
          <div class="mt-10 flex items-center justify-center gap-4 text-lg">
            <Link
              v-if="images.prev_page_url"
              :href="images.prev_page_url"
              class="px-5 py-2 bg-fuchsia-500 text-white font-bold rounded-full shadow-md hover:bg-fuchsia-600 transition duration-200"
            >
              ⬅️ Previous
            </Link>

            <span class="px-5 py-2 bg-white text-sky-700 font-medium border border-sky-300 rounded-full shadow-inner">
              Page {{ images.current_page }} of {{ images.last_page }}
            </span>

            <Link
              v-if="images.next_page_url"
              :href="images.next_page_url"
              class="px-5 py-2 bg-sky-500 text-white font-bold rounded-full shadow-md hover:bg-sky-600 transition duration-200"
            >
              Next ➡️
            </Link>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
