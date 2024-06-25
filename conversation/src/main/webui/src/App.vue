<script setup>
import { ref, computed } from 'vue'
import Conversation from './Conversation.vue'

const routes = {
  '/': Conversation,
}

const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/'] || Conversation
})
</script>

<template>
  <component :is="currentView" />
</template>