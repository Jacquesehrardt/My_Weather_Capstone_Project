<template>
  <HomePage />
</template>

<script>
  import HomePage from './components/HomePage.vue';

  export default {
    name: 'App',
    components: {
      HomePage
    }
  }
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Rubik:wght@400;500;600;700&display=swap');

  body{
    height: 100vh;
    font-family: 'Poppins', sans-serif;
  }

  #app{
    height: 100%;
  }
</style>
