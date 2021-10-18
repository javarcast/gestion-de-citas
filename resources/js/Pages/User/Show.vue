<template>
    <app-layout title="Usuarios">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Detalle de Usuario</h3>
                            <p class="text-sm text-gray-600">{{user.name}}</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <table-details :user="user" />
                            <hr class="my-6">
                            <Link :href="route('usuarios.index')"> Volver</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import {Head, Link} from '@inertiajs/inertia-vue3'
    import TableDetails from '@/Components/TableDetails.vue'
    export default defineComponent({
        components: {
            AppLayout,
            Head,
            TableDetails,
            Link
        },
        props: {
            user: Object,
        },
    })
</script>
