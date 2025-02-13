<!-- src/components/Accordion.vue -->
<template>
    <div class="border rounded-lg">
      <div 
        class="flex justify-between items-center p-4 bg-gray-100 cursor-pointer"
        @click="toggle"
      >
        <h3 class="font-medium">{{ title }}</h3>
        <span>{{ isOpen ? '−' : '+' }}</span>
      </div>
      <div v-show="isOpen" class="p-4 border-t bg-white">
        <slot></slot>
      </div>
    </div>
  </template>
  
  <script setup>
    import { ref } from 'vue';
    
    defineProps({
        title: String
    });
    
    const isOpen = ref(false);
    const toggle = () => {
        isOpen.value = !isOpen.value;
    };
  </script>
  