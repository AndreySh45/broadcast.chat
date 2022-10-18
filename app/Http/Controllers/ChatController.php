<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\MessageFormRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Foundation\Application;

class ChatController extends Controller
{
    public function index(): Factory|View|Application
    {
        auth()->loginUsingId(1);

        return view('chat');
    }

    public function messages(): Collection|array
    {
        return Message::query()
            ->with('user')
            ->get();
    }

    public function send(MessageFormRequest $request)
    {
        $message = $request->user()
            ->messages()
            ->create($request->validated());

        broadcast(new MessageSent($request->user(), $message));

        return $message;
    }
}
