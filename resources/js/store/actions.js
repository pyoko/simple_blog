import axios from "axios";

function getPosts(page) {
    return axios.get("api/posts?page=" + page);
};

export default {
    changeCurrentPage({ commit, dispatch }, currentPage) {
        commit("changecurrentPage", currentPage);
        dispatch("fetchPosts");
    },
    async fetchPosts({ commit, state }) {
        commit("fetching");

        try {
            const { data } = await getPosts(state.currentPage);
            commit("fetchedPosts", data);
        } catch (error) {
            console.log(error);
        }
    },
}