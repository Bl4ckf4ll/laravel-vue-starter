<template>
</template>

<script>
  import { index } from '../requests/Posts';

  export default {
    name: 'Posts',
    data: () => ({
      posts: [],
    }),
    async created() {
      const { data } = await index();

      this.posts = data;
    }
  };
</script>

<style scoped>

</style>
