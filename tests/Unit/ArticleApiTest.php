<?php

namespace Tests\Unit;
use Tests\TestCase;

class ArticleApiUnitTest extends TestCase
{
    public function test_it_can_create_an_article()
    {
        $data = [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph
        ];

        $this->post(route('articles.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}
