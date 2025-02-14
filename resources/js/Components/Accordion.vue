<template>
  <div class="border rounded-lg">
    <div 
      class="flex justify-between items-center p-4 bg-gray-100 cursor-pointer"
      @click="toggle"
    >
      <h3>{{ title }}</h3>
      <svg 
        class="w-5 h-5 transform transition-transform duration-300"
        :class="isOpen ? 'rotate-180' : 'rotate-0'"
        viewBox="0 0 24 24" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </div>

    <!-- Transição do conteúdo -->
    <div 
      class="grid transition-all duration-300 ease-in-out overflow-hidden"
      :class="isOpen ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'"
    >
      <div class="p-4 border-t bg-white">
        <slot></slot>
      </div>
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
