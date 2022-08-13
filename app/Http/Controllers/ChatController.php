<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ChatController extends Controller
{
    public function index(): Factory|View|Application
    {
        auth()->loginUsingId(1);

        return view('chat');
    }
}
