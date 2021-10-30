<template>
        <label  class="inline-flex flex justify-between items-center w-full p-3 hover:bg-gray-50 cursor-pointer">
            {{treatment.name}}
            <input @click="sendEmitClick" class="text-blue-900 w-6 h-6 mr-2 focus:ring-grenn-300 focus:ring-opacity-25 border border-gray-300 rounded" type="checkbox" />
        </label>
</template>

<script>
export default {
    props:{
        treatment: Object
    },
    methods:{
        sendEmitClick(){
            this.$emit("sendEmitEvent",this.treatment.id);
        }
    }
};
</script>