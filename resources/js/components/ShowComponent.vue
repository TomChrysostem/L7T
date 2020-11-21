// ShowComponent.vue
<template>
    <div class="jumbotron">
        <h1 class="display-4">{{ post.title }}</h1>
        <p class="lead">{{ post.body }}</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <router-link :to="{ name: 'posts' }" class="btn btn-primary">Back</router-link>
        </p>
    </div>
</template>

<script>
    export default {

      data() {
        return {
          post: {}
        }
      },
      created() {
        let uri = `http://l7t.test/api/post/show/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
      }
    }
</script>