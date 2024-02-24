<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;

    public function test_fetch_all_todo_list(): void
    {
        // preparation / prepare
        TodoList::factory()->create(['name' => 'my list']);


        // action / perform
        $response = $this->getJson(route('todo-list.index'));

        // assertion / predict
        $this->assertEquals(1, count($response->json()));
        $this->assertEquals('my list', $response->json()[0]['name']);
    }

    public function test_fetch_single_todo_list()
    {
        // Preparation
        $list = TodoList::factory()->create();

        // action
        $response = $this->getJson(route('todo-list.show', $list->id))
            ->assertOk()
            ->json();

        // assertion

        // $response->assertStatus(200);
        // $response->assertOk();

        $this->assertEquals($response['name'], $list->name);
    }
}
