<template>
    <app-layout title="Paciente-Editar">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               <i class="fas fa-users"></i> Módulo de Paciente
            </h2>
        </template>

        <div class="pb-12 pt-0">
            <div class="max-w-7xl mx-auto sm:pr-0 lg:pr-0">
                <div class="md:grid md:grid-cols-5 md:gap-1">
                     <div class="md:col-span-1 menu">
                         
                         <div class="mt-20 flex flex-row justify-center">
                             <img id="iconoRol" src="/images/call.png" alt="img del rol">
                             <p class="ml-2">Bienvenido Administrador</p>
                        </div>
                        <ul class=" flex flex-col mt-5 ps-2">
                            <li class=" m-3 mt-10">
                                 <Link :href="route('pacientes.index')" class="text-white p-3 mb-2 sidebar-link">
                                    <i class="px-2 far fa-address-book text-light fa-lg mr-3"></i> Pacientes
                                </Link>
                            </li>
                            <li class=" m-3">
                                <a href="#" class=" text-white p-3 mb-2 sidebar-link">
                                    <i class="px-2 fas fa-envelope-open-text text-light fa-lg mr-3"></i>Citas
                                </a>
                            </li>
                            <li class=" m-3">
                                <Link :href="route('usuarios.index')" class=" text-white p-3 mb-2 sidebar-link">
                                    <i class="px-2 fas fa-users text-light fa-lg mr-3"></i>Usuarios
                                </Link>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="md:col-span-4 mt-1">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form-errors :errors="errors"></form-errors>
                            <form @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">DNI</label>
                                <input type="text" v-model="form.dni" required class="form-input w-full rounded-md shadow-sm" />

                                <label class="block font-medium text-sm text-gray-700">Nombre</label>
                                <input type="text" v-model="form.name" required class="form-input w-full rounded-md shadow-sm" />
                             
                                <label class="block font-medium text-sm text-gray-700">Nro. Telefonico</label>
                                <input type="text" v-model="form.phone_number" required class="form-input w-full rounded-md shadow-sm" />

                                <label class="block font-medium text-sm text-gray-700">Dirección</label>
                                <input type="text" v-model="form.address" required class="form-input w-full rounded-md shadow-sm" />


                                <button class="bg-blue-500 hover:bg-blue-700 rounded-md text-white font-bold mt-2 py-2 px-4">Actualizar</button>
                                <Link class=" bg-gray-200 w-1/12 hover:bg-blue-700 hover:text-white rounded-md text-black mt-2 ml-2 py-2 px-4" :href="route('pacientes.index')"> Cancelar</Link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Link} from '@inertiajs/inertia-vue3'
    import FormErrors from '@/Components/FormErrors.vue'
    export default {
        components: {
            AppLayout,
            Link,
            FormErrors,
        },
        props:{
            patient: Object,
            errors: Array,
        },
        data(){
            return{
                form: {
                    name: this.patient.name,
                    dni: this.patient.dni,
                    phone_number: this.patient.phone_number,
                    address: this.patient.address,
                }
            }
        },
        methods:{
            submit(){
                this.$inertia.put(this.route('pacientes.update',this.patient.id), {...this.form});
            }
        }
    }
</script>
