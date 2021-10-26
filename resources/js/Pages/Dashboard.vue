<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>
    <div class="pb-12 pt-0 ">
      <div class="max-w-7xl mx-auto sm:pr-0 lg:px-0">
        <div class="lg:grid lg:grid-cols-5 lg:gap-2">
          <div class="md:col-span-1 menu menuDashboard">
            <div class="mt-20 flex flex-row justify-center">
              <img id="iconoRol" src="/images/call.png" alt="img del rol" />
              <p class="ml-2">Bienvenido Administrador</p>
            </div>
            <ul class="flex flex-col mt-5 ps-2">
              <li class="m-3 mt-10">
                <a href="#" class="text-white p-3 mb-2 sidebar-link">
                  <i class="px-2 far fa-address-book text-light fa-lg mr-3"></i>
                  Pacientes
                </a>
              </li>
              <li class="m-3">
                <a href="#" class="text-white p-3 mb-2 sidebar-link">
                  <i
                    class="px-2 fas fa-envelope-open-text text-light fa-lg mr-3"
                  ></i
                  >Citas
                </a>
              </li>
              <li class="m-3">
                <a href="#" class="text-white p-3 mb-2 sidebar-link">
                  <i class="px-2 fas fa-users text-light fa-lg mr-3"></i
                  >Doctores
                </a>
              </li>
            </ul>
          </div>
          <div class="md:col-span-4 mt-1">
            <div class="flex flex-col ">
              <div class="main__cards m-3 p-3">
                <div class="card flex flex-col justify-around">
                  <i
                    class="far fa-user fa-2x text-lightblue"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Numero de Pacientes</p>
                    <span class="font-bold text-title">{{nPatients}}</span>
                  </div>
                </div>
                <div class="card flex flex-col justify-around">
                  <i
                    class="far fa-calendar-alt fa-2x text-red"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Numero de Citas</p>
                    <span class="font-bold text-title">578</span>
                  </div>
                </div>
                <div class="card flex flex-col justify-around">
                  <i
                    class="fas fa-user-md fa-2x text-green-600"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Numero de Odontólogos</p>
                    <span class="font-bold text-title">{{nDentists}}</span>
                  </div>
                </div>
              </div>
              <div class="charts">
                <div class="charts__left">
                  <div class="charts__left__title flex items-center justify-between">
                    <div	>
                      <h1>Tratamientos Solicitados</h1>
                      <p>Tratamientos más Solicitados</p>
                    </div>
                  </div>
                  <apexchart width="500" type="bar" :options="options1" :series="series1"></apexchart>
                </div>
                <div class="charts__right">
                  <div class="charts__right__title flex items-center justify-between">
                    <div>
                      <h1>Citas Por Día</h1>
                      <p>Resumen Estadístico de Citas</p>
                    </div>
                  </div>
                  <apexchart width="400" type="area" :options="options2" :series="series2"></apexchart>
                </div>
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
import VueApexCharts from "vue3-apexcharts";

export default defineComponent({
  components: {
    AppLayout,
    VueApexCharts
    
  },
  props: {
            nPatients: Number,
            nDentists: Number
  },
  data: function() {
    return {
      options1: {
        chart: {
          id: 'vuechart-example'
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
        },
        stroke: {
          curve: 'smooth',
        },
        
      },
      series1: [{
        name: 'series-1',
        data: [30, 40, 45, 50, 49, 60, 70, 91]
      }],
      options2: {
        chart: {
          id: 'vuechart-example'
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
        },
        stroke: {
          curve: 'smooth',
        },
        
      },
      series2: [{
        name: 'series-1',
        data: [30, 40, 45, 50, 49, 60, 70, 91]
      }]
    }
  }
});


</script>
