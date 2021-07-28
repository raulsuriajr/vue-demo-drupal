<template>
  <div>
    <h1>{{ text }}</h1>
    <input v-model="text" placeholder="edit me">
  </div>
</template>

<script>
  export default {
    data() {
      return {
        text: 'Default'
      }
    }
  }
</script>
