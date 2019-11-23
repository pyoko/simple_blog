<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Author;
use App\Http\Repositories\AuthorRepository;

class AuthorTest extends TestCase
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
            ->get(route('author.list'))
            ->assertStatus(200);
    }

    public function testShouldFailIfInvalidDataGiven(): void
    {
        $this
            ->post(route('author.store'))
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'name'     => 'The name field is required.',
                'role'     => 'The role field is required.',
                'location' => 'The location field is required.',
                'avatar'   => 'The avatar field is required.',
            ]);
    }

    public function testShouldCreateNewAuthor(): void
    {
        $this
            ->post(route('author.store'), [
                'name'     => 'Test',
                'role'     => 'test',
                'location' => 'test',
                'avatar'   => 'test',
            ])
            ->assertStatus(200)
            ->assertJson(['created' => true]);
    }

    public function testShouldUpdateAuthor(): void
    {
        $authorRepo = new AuthorRepository;
        $author = $authorRepo->createUpdateAuthor([
            'name'     => 'Test',
            'role'     => 'test',
            'location' => 'test',
            'avatar'   => 'test',
        ], new Author);

        $this
            ->put(route('author.update', ['author' => $author->id]), [
                'name'     => 'New Test',
                'role'     => 'New test',
                'location' => 'New test',
                'avatar'   => 'New test',
            ])
            ->assertStatus(200)
            ->assertJson(['updated' => true]);
    }
}
