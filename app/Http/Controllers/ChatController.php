<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ChatController extends Controller
{
     public function create()
    {
        $messages = Message::all();
        return view('chat.create', compact('messages'));
    }
}
