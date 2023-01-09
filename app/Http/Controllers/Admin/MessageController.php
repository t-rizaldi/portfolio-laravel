<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'         => 'Admin RizDev | Message',
            'messages'      => Message::latest()->get(),
            'trashMessages'  => Message::onlyTrashed()->latest()->get()
        ];

        return view('admin.message.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $data = [
            'title'     => 'Admin RizDev | Detail Message',
            'message'   => $message
        ];

        //update read message
        Message::where('id', $message->id)->update(['read' => 1]);

        return view('admin.message.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        Message::where('id', $message->id)->delete();
        return to_route('admin.message.index')->with('toast_success', 'Messages has been deleted!');
    }

    public function permanentDestroy()
    {
        Message::withTrashed()->forceDelete();
        return to_route('admin.message.index')->with('toast_success', 'All Message has been permanently deleted!');
    }

    public function permanentDestroyById(Request $request)
    {
        Message::where('id', $request->id_msg)->forceDelete();
        return to_route('admin.message.index')->with('toast_success', 'Message has been permanently deleted!');
    }

    public function restore()
    {
        Message::withTrashed()->restore();
        return to_route('admin.message.index')->with('toast_success', 'All Messages has been succesfully restored!');
    }

    public function restoreById(Request $request)
    {
        Message::withTrashed()->where('id', $request->id_msg)->restore();
        return to_route('admin.message.index')->with('toast_success', 'Message has been succesfully restored!');
    }

    public function search(Request $request)
    {
        $data = [
            'title'         => 'Admin RizDev | Search Message',
            'messages'      => Message::filter()->latest()->get(),
            'trashMessages' => Message::onlyTrashed()->filter()->latest()->get()
        ];

        return view('admin.message.index', $data);
    }
}
