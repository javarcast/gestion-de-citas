<template>
  <table>

    <tbody>
        <tr>
            <th class="border px-4 py-2"> Nombre</th>
            <td class="border px-4 py-2">{{ user.name }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> Nro. Telefonico</th>
            <td class="border px-4 py-2">{{ user.phone_number }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> DNI</th>
            <td class="border px-4 py-2">{{ user.dni }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> Dirección</th>
            <td class="border px-4 py-2">{{ user.address }}</td>
        </tr>
        <tr v-if="user.email">
          <th class="border px-4 py-2"> Email</th>
          <td class="border px-4 py-2">{{ user.email }}</td>
        </tr>
    </tbody>
  </table>
</template>

<script>
import { defineComponent } from "vue";
export default defineComponent({
  props: {
    user: Object,
  },
});
</script>
