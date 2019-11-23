<template>
    <div>
        <Header />

        <div class="main-container">
            <ArticleContainer />
            <Pagination v-if="pagination" />
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import Header from "./components/Header";
import ArticleContainer from "./components/ArticleContainer";
import Pagination from "./components/Pagination";

export default {
    components: {
        Header,
        ArticleContainer,
        Pagination,
    },
    computed: mapGetters([
        'pagination'
    ]),
    mounted() {
        this.$store.dispatch("fetchPosts");
    }
}
</script>