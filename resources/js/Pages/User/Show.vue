<template>
  <app-layout title="Ver Usuarios">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modulo de Usuarios
      </h2>
    </template>
    <dashboard-layout>
      <div class="md:col-span-4 mt-1">
        <div class="shadow bg-white md:rounded-md p-4">
          <div class="flex flex-col justify-center">
            <table-details :usershow="usershow" />
            <div class="flex justify-center">
              <Link
                class="
                  bg-gray-200
                  w-1/12
                  hover:bg-blue-700 hover:text-white
                  rounded-md
                  text-black
                  mt-2
                  py-2
                  px-4
                "
                :href="route('usuarios.index')"
              >
                Volver</Link
              >
            </div>
          </div>
        </div>
      </div>
    </dashboard-layout>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import TableDetails from "@/Components/TableDetails.vue";
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
export default defineComponent({
  components: {
    AppLayout,
    Head,
    TableDetails,
    Link,
    DashboardLayout,
  },
  props: {
    usershow: Object,
  },
});
</script>
