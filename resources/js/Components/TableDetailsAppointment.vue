<template>
  <table>

    <tbody>
        <tr>
            <th class="border px-4 py-2"> Paciente</th>
            <td class="border px-4 py-2">{{ appointment.patient.name }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> Doctor</th>
            <td class="border px-4 py-2">{{ appointment.doctor.name }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> Fecha</th>
            <td class="border px-4 py-2">{{ appointment.date }}</td>
        </tr>
        <tr>
            <th class="border px-4 py-2"> Hora</th>
            <td class="border px-4 py-2">{{ appointment.hour }}</td>
        </tr>
        <tr>
          <th class="border px-4 py-2"> Total</th>
          <td class="border px-4 py-2">{{ appointment.total}}</td>
        </tr>
        
    </tbody>
  </table>
</template>

<script>
import { defineComponent } from "vue";
export default defineComponent({
  props: {
    appointment: Object,
  },
});
</script>
