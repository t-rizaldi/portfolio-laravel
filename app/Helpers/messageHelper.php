<?php

use App\Models\Message;

function countNewMessages()
{
    return Message::where('read', 0)->count();
}

function getMessages()
{
    return Message::latest()->limit(3)->get();
}