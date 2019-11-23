export default {
    changecurrentPage: (state, currentPage) => state.currentPage = currentPage,
    fetching: state => state.isLoading = true,
    fetched: state => state.isLoading = false,
    fetchedPosts: (state, data) => {
        state.isLoading = false;
        state.posts = data.data;
        state.pagination = data.meta;
    },
}