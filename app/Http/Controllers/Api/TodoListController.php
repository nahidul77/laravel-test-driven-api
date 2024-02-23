<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        return response(['lists' => []]);
    }
}
