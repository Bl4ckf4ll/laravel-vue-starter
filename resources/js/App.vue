<template>
  <v-app light>
    <v-container text-xs-center>
      <h1>Vue App</h1>
      <p>
        A Laravel starter with <strong>Vue</strong> and <strong>Vuetify</strong>
      </p>
      <Posts/>
    </v-container>
  </v-app>
</template>

<script>
  import Posts from './components/Posts';
  export default {
    name: 'App',
    components: { Posts },
  };
</script>
