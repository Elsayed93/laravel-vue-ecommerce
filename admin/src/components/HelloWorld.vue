<script setup>
import { computed, ref } from 'vue'
import { useTestStore } from '../stores';

const store = useTestStore()

const test = computed(() => {
  return store.$state.test
});

</script>

<template>
  {{ test }}
  
</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
