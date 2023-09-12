<template>
  <NuxtLink to="#" class="px-6 pt-3 pb-4 block bg-white border-t hover:bg-indigo-50">
    <div class="flex justify-between flex-wrap-reverse">
      <span class="text-sm font-semibold text-gray-900">{{ chat.name }}</span>
      <span class="text-sm text-gray-600">{{ chat.days }} days ago</span>
    </div>
    <p class="text-sm text-gray-900">
      {{ chat.subject }}
    </p>
    <p class="mt-2 text-sm text-gray-600">
      {{ chat.description }}
    </p>
  </NuxtLink>
</template>
<script setup>
  const props = defineProps({
    chat: {type: Object }
  })
</script>