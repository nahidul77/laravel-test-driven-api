<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{

    public function test_example(): void
    {
        // preparation / prepare

        // action / perform
        $response = $this->getJson(route('todo-list.index'));

        // assertion / predict
        $this->assertEquals(1, count($response->json()));
    }
}
