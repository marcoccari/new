<template>
  <div>
    <DataTable :headers="columns" >

    </DataTable>
  </div>
</template>

<script>
import DataTable from '@/components/DataTable.vue';


export default {
  components: {
    DataTable
  },
  props: {
    columns: Array,
    data: Array
  }
};
</script>
