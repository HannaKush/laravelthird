<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Post list page';
    }

    public function create()
    {
        return 'Create post page';
    }

    public function store()
    {
        return 'Post creation request';
    }

    public function show()
    {
        return 'Post view page';
    }

    public function edit()
    {
        return 'Post change page';
    }

    public function update()
    {
        return 'Post change request';
    }

    public function delete()
    {
        return 'Post delete request';
    }

    public function like()
    {
        return 'Like +1';
    }
}
