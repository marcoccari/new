<template>
  <div>
    <table>
      <thead>
        <tr>
          <th v-for="column in headers" :key="column">{{ column }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td v-for="column in headers" :key="column">{{ item[column] }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    headers: Array,
    items: Array
  }
};
</script>




