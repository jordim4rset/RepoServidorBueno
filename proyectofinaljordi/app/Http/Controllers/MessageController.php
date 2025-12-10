<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;

use Illuminate\View\View;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        $message['name'] = $request->input('name');
        $message['email'] = $request->input('email');
        $message['content'] = $request->input('content');

        return view('message.store', compact('message'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('message.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('message.destroy');
    }
}
