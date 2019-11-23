<template>
    <footer class="pagination">
        <a @click="changeCurrentPage(1)">First</a>
        <a @click="changeCurrentPage(getPrevPage())" class="pagination__md">Prev</a>
        <a
            v-for="n in pagination.last_page"
            :key="n"
            :class="{ active: isCurrentPage(n) }"
            @click="changeCurrentPage(n)"
        >{{ n }}</a>
        <a @click="changeCurrentPage(getNextPage())" class="pagination__md">Next</a>
        <a @click="changeCurrentPage(pagination.last_page)">Last</a>
    </footer>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
    computed: mapGetters([
        'pagination'
    ]),
    methods: {
        changeCurrentPage(page) {
            this.$store.dispatch("changeCurrentPage", page);
        },
        isCurrentPage(page) {
            return page == this.$store.state.currentPage;
        },
        getPrevPage() {
            return this.$store.state.currentPage <= 1 ? 1 : (this.$store.state.currentPage - 1);
        },
        getNextPage() {
            return this.$store.state.currentPage >= this.$store.state.pagination.last_page ? 
                this.$store.pagination.last_page : (this.$store.state.currentPage + 1);
        },
    }
}
</script>