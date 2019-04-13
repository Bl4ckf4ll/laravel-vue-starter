<template>
  <v-card>
    <v-img
      :src="imageUrl"
    />
    <v-card-title>
      <h2>{{ title }}</h2>
    </v-card-title>
    <v-card-text>
      <p>{{ content }}</p>
    </v-card-text>
    <v-card-actions>
      <v-btn
        color="primary"
        flat
      >
        Read more
      </v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
  export default {
    name: 'Post',
    props: {
      title: {
        type: String,
        default: 'No title',
      },
      content: {
        type: String,
        default: 'No content available',
      },
      imageUrl: {
        type: String,
      },
    },
  };
</script>

<style scoped>

</style>
