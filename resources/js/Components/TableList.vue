<template>
  <table>
    <thead>
        <tr >
            <th class="border px-4 py-2" >Nombre</th>
            <th class="border hidden md:block px-4 py-2">Email</th>
            <th class="border hidden md:block px-4 py-2">Nro. Telefonico</th>
            <th class="border px-4 py-2" colspan="3"> Acciones</th>
        </tr>
    </thead>
    <tbody>

    <tr v-for="user in users" :key="user.id">
      <td class="border px-4 py-2">
        {{ user.name }}
      </td>
      <td class="border hidden md:block px-4 py-2">
        {{ user.email }}
      </td>
      <td class="px-4 hidden md:block border py-2">
        {{ user.phone_number }}
      </td>
      <td class="px-4 py-2 border">
        <Link :href="route('usuarios.show', user.id)"> Ver </Link>
      </td>
      <td class="px-4 py-2 border">
        <Link :href="route('usuarios.edit', user.id)"> Editar </Link>
      </td>
      <td class="px-4 py-2 border">
        <Link :href="route('usuarios.destroy', user.id)"> Eliminar </Link>
      </td>
    </tr>
    </tbody>
  </table>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default defineComponent({
  components: {
    Head,
    Link,
  },
  props: {
    users: Array,
  },
});
</script>
