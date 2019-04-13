<template>
  <v-container grid-list-xl>
    <v-layout
      row
      wrap
      justify-center
    >
      <v-flex
        xs6
      >
        <v-flex
          v-for="post in posts"
          :key="post.id"
        >
          <Post
            :title="post.title"
            :content="post.content"
            :image-url="post.image_url"
          />
        </v-flex>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import { index } from '../requests/Posts';
  import Post from './Post';

  export default {
    name: 'Posts',
    components: { Post },
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
