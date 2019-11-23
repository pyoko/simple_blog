<template>
    <div class="main-container">
        <Article v-for="post in posts" :post="post" :key="post.id" />
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import Article from "./Article";

export default {
    components: {
        Article,
    },
    computed: mapGetters([
        'posts'
    ]),
}
</script>