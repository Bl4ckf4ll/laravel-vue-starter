<template>
  <v-app light>
    <v-container>
      <v-toolbar app>
        <v-toolbar-title>
          {{ title }}
          <small class="blue--text" v-html="description"></small>
        </v-toolbar-title>
        <v-spacer/>
        <v-form>
          <v-container>
            <v-layout>
              <v-flex xs6>
                <v-text-field
                  solo-inverted
                  :value="title"
                  label="Site Name"
                ></v-text-field>
              </v-flex>
              <v-flex xs6>
                <v-text-field
                  solo-inverted
                  :value="description"
                  label="Site Description"
                ></v-text-field>
              </v-flex>
            </v-layout>
          </v-container>
        </v-form>
      </v-toolbar>
      <v-content>
        <Posts/>
      </v-content>
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
