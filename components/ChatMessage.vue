<template>
   <article class="px-4 sm:px-10 pt-6 pb-8 bg-white rounded-lg shadow">
    <div class="flex items-center justify-between flex-wrap">
      <p class="text-lg font-semibold">
        <span class="text-gray-900">{{ message.name }}</span>
        <span class="text-gray-600"> wrote</span>
      </p>
      <div class="flex items-center flex-wrap">
        <span class="text-sm text-gray-600">
          {{ message.replyDate }}
        </span>
        <img class="sm:ml-5 w-9 h-9 object-cover rounded-full" :src="message.imageUrl" :alt="message.name">
      </div>
    </div>
    <div class="mt-6 text-gray-800 text-sm">
      <p>{{ message.message }}</p>
      <p v-if="message.signature" class="mt-4 font-semibold text-gray-900">{{ message.name }}</p>
      <p v-if="message.proffession">{{ message.proffession }}</p>
    </div>
  </article>
</template>
<script setup>
const props = defineProps({
  message: { type: Object }
})
</script>