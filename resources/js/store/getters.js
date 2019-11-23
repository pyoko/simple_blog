export default {
    currentPage: state => state.currentPage,
    isLoading: state => state.isLoading,
    posts: state => state.isLoading ? 
        [{ author: {} }, { author: {} }, { author: {} }, { author: {} }, { author: {} }] : state.posts,
    pagination: state => state.pagination,
}