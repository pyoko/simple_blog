<template>
    <section 
        class="main-content__list" 
        :class="{ 'main-content__loading': isLoading }"
    >
        <header>
            <div class="main-content__header">
                <h1 class="main-content__title">
                    <a href="">{{ post.title }}</a>
                </h1>
                <div class="main-content__misc">
                    <span class="main-content__author-sm">{{ post.author.name }}</span>
                    <span v-if="post.created_at">created {{ post.created_at }}</span>
                    <span v-if="post.updated_at">updated {{ post.updated_at }}</span>
                </div>
            </div>
            <aside class="main-content__author">
                <div class="main-content__avatar">
                    <div class="img_blocker">
                        <img 
                            :alt="post.author.name"
                            :src="post.author.avatar"
                            v-if="post.author.avatar"
                        >
                    </div>
                </div>
                <div class="main-content__author-description">
                    <h4 class="author__name"><a href="">{{ post.author.name }}</a></h4>
                    <span class="author__role">{{ post.author.role }}</span>
                    <span class="author__location">{{ post.author.location }}</span>
                </div>
            </aside>
        </header>

        <div class="main-content__tags">
            <span class="icon-tag"></span>
            <a 
                href="#" 
                v-for="tag in post.tags"
                v-bind:key="tag.name"
            >{{ tag.name }}</a>
        </div>

        <article class="main-content__article">
            <div class="main-content__image">
                <img 
                    :alt="post.name"
                    :src="post.image_url"
                    v-if="post.image_url"
                >
            </div>
            <div class="main-content__text">{{ post.body }}</div>
        </article>
    </section>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    props: {
        post: Object,
    },
    computed: mapGetters([
        'isLoading',
    ])    
}
</script>