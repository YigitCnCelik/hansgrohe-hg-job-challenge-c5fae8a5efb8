<template>
  <div class="flex items-start gap-2.5 mt-2 mb-2" v-show="message">
    <img class="w-8 h-8 rounded-full" v-if="message?.persona?.image" :src="message.persona.image" alt="">
    <div class="flex flex-col w-full leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
      <div class="flex items-center space-x-2 rtl:space-x-reverse">
        <span class="text-sm font-semibold text-gray-900 dark:text-white" v-if="message.persona">{{ message.persona.name }}</span>
        <span class="text-sm font-semibold text-gray-900 dark:text-white" v-if="!message.persona">You</span>
      </div>
      <p id="text" class="text-sm text-left font-normal py-2.5 text-gray-900 dark:text-white">{{ message.text }}</p>
    </div>
  </div>
</template>

<script setup>

defineProps(['message'])
</script>