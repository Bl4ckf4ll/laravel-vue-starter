<template>
  <v-app light>
    <v-container>
      <h1>{{ title }}</h1>
      <p v-html="description"></p>
      <Posts/>
    </v-container>
  </v-app>
</template>

<script>
  import { mapState } from 'vuex';
  import Posts from './components/Posts';

  export default {
    name: 'App',
    components: {
      Posts,
    },
    computed: {
      ...mapState('site', [
        'title',
        'description',
      ]),
    },
  };
</script>
