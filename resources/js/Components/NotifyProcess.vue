<template>
    <div class="bg-blue-500 text-white text-sm font-bold p-4">
        <p> {{status}}</p>
    </div>
</template>

<script>
import { defineComponent } from "vue";
export default defineComponent({
  name:'NotifyProcess',
  props: {
    status: String,
  },
});
</script>
