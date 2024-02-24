<?php

namespace App\Http\Controllers\Api;

use App\Models\TodoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::all();

        return response($lists);
    }

    public function show($id)
    {
        $list = TodoList::find($id);

        return response($list);
    }
}
