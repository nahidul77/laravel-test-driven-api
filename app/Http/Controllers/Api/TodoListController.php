<?php

namespace App\Http\Controllers\Api;

use App\Models\TodoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::all();

        return response($lists);
    }

    public function show(TodoList $list)
    {
        return response($list);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => ['required']]);

        $list = TodoList::create(['name' => $request->name]);

        // return response($list, Response::HTTP_CREATED);

        return $list;
    }

    public function test_delete_todo_list()
    {
        $this->deleteJson(route('todo-list.destroy'))->assertNoContent();
    }
}
