<template>
          <table class="mt-2 w-11/12 p-5 ml-2 divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                    w-9/12
                  "
                >
                  Tratamiento
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                    w-3/12
                  "
                >
                  Precio
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="treatment in treatmentsSelected" :key="treatment.id">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{treatment.name}}
                      </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-500">{{priceDolar(treatment.price) }}</div>
                </td>
              </tr>
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-s
                    font-medium
                    text-gray-700
                    uppercase
                    tracking-wider
                    w-9/12
                  ">Total</td>
                    <td scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-s
                    font-medium
                    text-gray-700
                    uppercase
                    tracking-wider
                    w-9/12
                  ">{{priceDolar(total)}}</td>
                </tr>
            </tfoot>   
          </table>
</template>

<script>
import { defineComponent } from "vue";
import numeral from 'numeral'
export default defineComponent({
    props:{
        treatmentsSelected: Array,
        total: Number
    },
    methods:{
        priceDolar(value){
            if(!value){
                return '$ 0'
            }
            return numeral(value).format('($) 0.00a')
        }
    }
});
</script>
