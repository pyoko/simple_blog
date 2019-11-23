<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\{Post, Author, Tag};
use App\Http\Repositories\{PostRepository, AuthorRepository};

class PostTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withHeader('accept', 'application/json');
    }

    // ------------------------------------------------------------------------

    public function testShouldAccessController(): void
    {
        $this
            ->get(route('post.list'))
            ->assertStatus(200);
    }

    public function testShouldFailIfInvalidDataGiven(): void
    {
        $this
            ->post(route('post.store'))
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'author' => 'The author field is required.',
                'title'     => 'The title field is required.',
                'body'      => 'The body field is required.',
            ]);
    }

    public function testShouldCreateNewPost(): void
    {
        $authorRepo = new AuthorRepository;
        $author = $authorRepo->createUpdateAuthor([
            'name'     => 'Test',
            'role'     => 'test',
            'location' => 'test',
            'avatar'   => 'test',
        ], new Author);

        $tag = new Tag;
        $tag->name = 'test';
        $tag->save();

        $this
            ->post(route('post.store'), [
                'author' => $author->id,
                'title'     => 'test',
                'body'      => 'test',
                'image'     => 'test',
                'tags'      => [$tag->id]
            ])
            ->assertStatus(200)
            ->assertJson(['created' => true]);
    }

    public function testShouldUpdatePost(): void
    {
        $authorRepo = new AuthorRepository;
        $author = $authorRepo->createUpdateAuthor([
            'name'     => 'Test',
            'role'     => 'test',
            'location' => 'test',
            'avatar'   => 'test',
        ], new Author);

        $tag = new Tag;
        $tag->name = 'test';
        $tag->save();

        $postRepo = new PostRepository;
        $post = $postRepo->createUpdatePost([
            'author'    => $author->id,
            'title'     => 'test',
            'body'      => 'test',
            'image'     => 'test',
            'tags'      => [$tag->id]
        ], new Post);

        // ------------------------------------------------------------------------

        $newAuthor = $authorRepo->createUpdateAuthor([
            'name'     => 'Test 2',
            'role'     => 'test 2',
            'location' => 'test 2',
            'avatar'   => 'test 2',
        ], new Author);

        $newTag = new Tag;
        $newTag->name = 'test 2';
        $newTag->save();

        $this
            ->put(route('post.update', ['post' => $post->id]), [
                'author'    => $newAuthor->id,
                'title'     => 'test 2',
                'body'      => 'test 2',
                'image'     => 'test 2',
                'tags'      => [$newTag->id]
            ])
            ->assertStatus(200)
            ->assertJson(['updated' => true]);
    }
}
