<template>
  <app-layout title="Citas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-users"></i> Módulo de Citas
      </h2>
    </template>
    <dashboard-layout>
      <div class="md:col-span-4 mt-1">
        <div class="shadow bg-white md:rounded-md p-4">
          <div class="flex justify-between">
            <input
              type="text"
              class="form-input rounded-md shadow-sm"
              placeholder="Buscar..."
              v-model="q"
            />
            <input
              type="text"
              class="form-input rounded-md shadow-sm"
              placeholder="Buscar Fecha"
              v-model="f"
            />

            <Link
              :href="route('citas.create')"
              class="bg-blue-500 text-white font-bold p-2 mx-4 rounded"
              ><i class="far fa-clipboard"></i> Crear Cita</Link
            >
          </div>

          <hr class="my-6" />
          <div class="flex flex-col justify-center">
            <table-list-appointment :appointments="appointments.data" />
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
import TableListAppointment from "@/Components/TableListAppointment.vue";
import DashboardLayout from "@/Layouts/DashboardLayout.vue";

export default defineComponent({
  components: {
    AppLayout,
    Head,
    Link,
    TableListAppointment,
    DashboardLayout,
  },
  props: {
    appointments: Array,
  },
  watch: {
    q: function (value) {
      this.$inertia.replace(this.route("citas.index", {q: value }));
    },
    f: function (value) {
      this.$inertia.replace(this.route("citas.index", {f: value }));
    },
  },
  data() {
    return {
        q:"",
        f:""
    };
  },
});
</script>
