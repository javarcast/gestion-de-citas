<template>
  <app-layout title="Pacientes">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-users"></i> Modulo de Pacientes
      </h2>
    </template>

    <div class="pb-12 pt-0">
      <div class="max-w-7xl mx-auto sm:pr-0 lg:px-0">
        <div class="md:grid md:grid-cols-5 md:gap-1">
          <div class="md:col-span-1 menu">
            <div class="mt-20 flex flex-row justify-center">
              <img id="iconoRol" src="/images/call.png" alt="img del rol" />
              <p class="ml-2">Bienvenido Administrador</p>
            </div>
            <ul class="flex flex-col mt-5 ps-2">
              <li class="m-3 mt-10">
                <Link :href="route('pacientes.index')" class="text-white p-3 mb-2 sidebar-link">
                  <i class="px-2 far fa-address-book text-light fa-lg mr-3"></i> Pacientes
                </Link>
              </li>
              <li class="m-3">
                <a href="#" class="text-white p-3 mb-2 sidebar-link">
                  <i class="px-2 fas fa-envelope-open-text text-light fa-lg mr-3"></i>Citas
                </a>
              </li>
              <li class="m-3">
                <Link :href="route('usuarios.index')" class=" text-white p-3 mb-2 sidebar-link">
                  <i class="px-2 fas fa-users text-light fa-lg mr-3"></i>Usuarios
                </Link>
              </li>
            </ul>
          </div>
          <div class="md:col-span-4 mt-1">
            <div class="shadow bg-white md:rounded-md p-4">
              <div class="flex justify-between">
                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q"/>

                <Link 
                  :href="route('pacientes.create')"
                  class="bg-blue-500 text-white font-bold p-2 mx-4 rounded"
                  ><i class="far fa-user"></i> Crear Paciente</Link
                >
              </div>

              <hr class="my-6" />
              <div class="flex flex-col justify-center">
               
                <table-list-patient :patients="patients.data" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import TableListPatient from "@/Components/TableListPatient.vue";

export default defineComponent({
  components: {
    AppLayout,
    Head,
    Link,
    TableListPatient,
  },
  props: {
    patients: Array,
  
  },
  watch: {
    q: function (value) {
      this.$inertia.replace(this.route("pacientes.index", { q: value }));
    },
  },
  data() {
    return {
      q: "",
    };
  },
});
</script>
